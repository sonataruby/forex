<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function isPost(){
        if($this->input->method() == "post"){
            return true;
        }
        return false;
    }

    public function isPut(){
        if($this->input->method() == "put"){
            return true;
        }
        return false;
    }

    public function isGet(){
        if($this->input->method() == "get"){
            return true;
        }
        return false;
    }


    public function go($path=""){
        redirect($path ? $path : $this->uri->uri_string());
    }
    
    public function view($file, $data=[]){
    	$this->load->view('header');
    	$this->load->view($file, $data);
    	$this->load->view('footer');
    }
}