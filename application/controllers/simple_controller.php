<?php
class simple_controller extends CI_Controller{
	 function __construct(){
        
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('simple_model');
    }
	function load_view(){
		$username = $this->session->userdata('username');
		$name = $this->simple_model->get_user_name($username);
		$lastname = $this->simple_model->get_user_lastname($username);
		$address = $this->simple_model->get_user_adress($username); 
		print"<div style='text-align:center'><h3>Name: ". $name."</h3></p>";
		print"<div style='text-align:center'><h3>Family Name: ". $lastname."</h3></p>";
		print"<div style='text-align:center'><h3>Address: ". $address."</h3></p>";
		$this->load->view('simple_user');
	}
	function update_validation(){
		$this->load->library('form_validation');  
		$username = $this->session->userdata('username');
       	$this->form_validation->set_rules('Emri', 'Emri');  
       	$this->form_validation->set_rules('Mbiemri', 'Mbiemri');
       	$this->form_validation->set_rules('Adress', 'Adress');
       	if($this->form_validation->run()){
       			$emri = $this->input->post('Emri');  
                $mbiemri = $this->input->post('Mbiemri');  
                $address = $this->input->post('Adress');
                $this->simple_model->change_data($username, $emri, $mbiemri, $address);  

                redirect(base_url() . 'simple_controller/load_view');
       	}
       	else{
       		redirect(base_url() . 'simple_controller/load_view');
       	}
	}
	 function logout()  
      {  
           $this->session->unset_userdata('username');  
           redirect(base_url() . 'main/login');  
      }  
}