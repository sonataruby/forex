<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {


	public function index()
	{
		$this->view('home');
	}

	public function shadown()
	{
		if($this->isPost()){
			$mt5id = trim($this->input->post("mt5id"));
			$name = $this->input->post("name");
			$email = $this->input->post("email");
			$code = sha1($mt5id);
			$data = $this->db->get_where("account_access",["mt5_id" => $mt5id])->row();
			if(!$data){
				$this->db->insert("account_access",["mt5_id" => $mt5id, "name" => $name, "email" => $email, "shadown_code" => $code, "status" => 1]);
				$data = $this->db->get_where("account_access",["mt5_id" => $mt5id])->row();
			}
		}
		
		$this->view('shadown',["data" => $data]);
	}


	public function events()
	{
		if($this->isPost()){
			
		}
		
		$this->view('events');
	}



	public function buy()
	{
		if($this->isPost()){
			
		}
		
		$this->view('buy');
	}

	public function singal()
	{
		if($this->isPost()){
			
		}
		
		$this->view('singal');
	}

}
