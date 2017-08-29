<?php
	class employee_editor extends CI_Controller{
		function __construct{
			parent::__construct();
			$this->load->helper('url');
			$this->load->helper('form');
		}
		function load_view(){
			$this->load->view('edit_employee');
		}
		function change_validate(){

		}
	}