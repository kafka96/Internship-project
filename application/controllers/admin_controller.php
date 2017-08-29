<?php
	class admin_controller extends CI_Controller{
		 function __construct(){
        
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
   		}

   		function load_table(){
   			$this->load->view('datatable');
   		}
   		function load_admin(){
   			$this->load->view('admin');
   		}
	}