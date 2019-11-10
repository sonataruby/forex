<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function view($file, $data=[]){
    	$this->load->view('header');
    	$this->load->view($file, $data);
    	$this->load->view('footer');
    }
}