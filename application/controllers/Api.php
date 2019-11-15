<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends MY_Controller {

	public $channelId = '-1001179593062';
	public function index()
	{
		
		
	}

	public function welcome($loginid=0, $symbol=""){
		$this->load->helper('string');
		$data = $this->db->get_where("account_access",["mt5_id" => $loginid, "status" => 1])->row();
		$name = "Unknow";

		if($data){
			$name = $data->name;
		}
		$website="https://api.telegram.org/bot922775317:AAFMog8g_hh28jJMahw-BVHz4OtZBOd_rqs";
		
		$params=[
		    'chat_id'=> $this->channelId,
		    'text'=> "Welcome {$name} using [".$symbol."] AI Magic Trader\nShadown Code : {$data->shadown_code}\nMagic Number : ".random_string('alnum', 16),
		];
		$ch = curl_init($website . '/sendMessage');
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$result = curl_exec($ch);
		curl_close($ch);

	}

	public function errorshadown($loginid=0, $symbol=""){

		$this->load->helper('string');
		$data = $this->db->get_where("account_access",["mt5_id" => $loginid, "status" => 1])->row();
		$name = "Unknow";

		if($data){
			$name = $data->name;
		}
		$website="https://api.telegram.org/bot922775317:AAFMog8g_hh28jJMahw-BVHz4OtZBOd_rqs";
		
		$params=[
		    'chat_id'=> $this->channelId,
		    'text'=> "{$name} Không có code xát nhận điều khiển Timeline [".$symbol."] AI Magic Trader\nShutdown Events : ",
		];
		$ch = curl_init($website . '/sendMessage');
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$result = curl_exec($ch);
		curl_close($ch);

	}
	
	public function connect($loginid=0){
		$data = $this->db->get_where("account_access",["mt5_id" => $loginid, "status" => 1])->row();
		header('Content-Type: application/json');
		$this->load->helper('string');
		$arv = [
			"id" => $loginid,
			"shaodwn" => ($data->shadown_code ? $data->shadown_code : sha1(random_string('alnum', 16))),
			"shaodwn_txt" => random_string('alnum', 16)
		];
		echo json_encode($arv);
	}

	public function events($datetime=0){
		$datetime = str_replace('.', '-', $datetime);
		$data = $this->db->select("event_hour as timeline")->get_where("events_timeline",["event_date" => $datetime])->result();
		header('Content-Type: application/json');
		$arv = [];
		foreach ($data as $key => $value) {
			$arv[] = $value->timeline;
		}
		
		echo json_encode(["timeline" => implode($arv, ';')]);
	}

	public function telegram($loginid=0,$symbol,$order_id, $openprice=0,$price=0, $profit=0,$timestart="",$timeend="", $type=""){
		$data = $this->db->get_where("account_access",["mt5_id" => $loginid, "status" => 1])->row();

		$order = $this->db->get_where("Orders",["order_id" => $order_id])->row();
		$timestart = str_replace('%20', " ", $timestart);
		$timeend = str_replace('%20', " ", $timeend);
		$profit = number_format($profit,2,".","");
		$openprice = number_format($profit,6,".","");
		$price = number_format($price,6,".","");
		if($symbol == "XAUUSD"){
			$openprice = number_format($profit,2,".","");
			$price = number_format($price,2,".","");
		}
		
		if(!$order){
			$this->db->insert("Orders",["order_id" => $order_id, "profit" => $profit, "loginid" => $loginid]);
			$website="https://api.telegram.org/bot922775317:AAFMog8g_hh28jJMahw-BVHz4OtZBOd_rqs";
			
			$params=[
			    'chat_id'=> $this->channelId,
			    'text'=> $data->name." : [".$type."] ".$symbol." giá : ".$openprice." chốt lệnh {$price} Lợi nhuận : ".$profit."$\nTu lúc ".$timestart." đến ".$timeend."\nSingal : ".$data->singalurl,
			];
			$ch = curl_init($website . '/sendMessage');
			curl_setopt($ch, CURLOPT_HEADER, false);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			$result = curl_exec($ch);
			curl_close($ch);
		}
		
	}
}

