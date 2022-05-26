<?php
class Staff extends CI_Controller{
	 function __construct(){
    	parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model("categoryModel");
        $this->load->library('session');
        
    }
	public function index(){

		$this->load->view("admin/pages/staff/add");


	}
}

?>