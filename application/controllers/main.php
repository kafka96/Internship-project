<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Main extends CI_Controller {  
      //functions  
      function __construct(){
        
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
    }
      function login()  
      {  
           //http://localhost/tutorial/codeigniter/main/login  
           $data['title'] = 'Login';  

          // echo base_url();exit;
           $this->load->view("login", $data);  
      }  
      function login_validation()  
      {  
		   
           $this->load->library('form_validation');  
           $this->form_validation->set_rules('username', 'Username', 'required');  
           $this->form_validation->set_rules('password', 'Password', 'required');  
           if($this->form_validation->run())  
           {  
                //true  
                 $username = $this->input->post('username');  
                 $password = $this->input->post('password');  
                //model function  
                 $this->load->model('main_model');  
                 if($this->main_model->can_login($username, $password))  
                 {  
                      $session_data = array('username'=>$username);  
                      $this->session->set_userdata($session_data);

                      redirect(base_url() . 'main/enter');  
                 }  
                 else  
                 {  
                      $this->session->set_flashdata('error', 'Invalid Username and Password');  
                      redirect(base_url() . 'main/login');  
                 }  
           }  
           else  
           {  
                //false  
                $this->login();  
           }  
      }  
      function enter(){  

           if($this->session->userdata('username') != '')  
           {  
                $this->load->model('main_model');
                $user = $this->session->userdata('username');
                $data = $this->main_model->print_id($user);
                if($data != true){
                  $title['title'] = 'Simple User';
                  redirect('simple_controller/load_view');
                  
                  // echo $id;
                  echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>'; 

                  echo '<label><a href="'.base_url().'main/logout">Logout</a></label>';
                  }  
                else {
                  $title['title'] = 'Admin';
                  $this->load->view('admin',$title);
                  
                  // echo $id;
                  echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>'; 

                  echo '<label><a href="'.base_url().'main/logout">Logout</a></label>';
                } 

           }  
           else  
           {  
                redirect(base_url() . 'main/login');  
           }  
      }  
      function logout()  
      {  
           $this->session->unset_userdata('username');  
           redirect(base_url() . 'main/login');  
      }
      function sign_up(){
           $this->load->library('form_validation');  
           $this->form_validation->set_rules('Emri', 'Emri', 'required');  
           $this->form_validation->set_rules('Mbiemri', 'Mbiemri', 'required');  
           $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');  
           $this->form_validation->set_rules('password', 'Password', 'required'); 
           $this->form_validation->set_rules('Adress', 'Address', 'required');   
           if($this->form_validation->run()) {
                $emri = $this->input->post('Emri');  
                $mbiemri = $this->input->post('Mbiemri');
                $username = $this->input->post('username');  
                $password = $this->input->post('password');
                $adress = $this->input->post('Adress');  
                $this->load->model('main_model'); 
                $this->main_model->register_user($emri, $mbiemri, $username, $password, $adress);
                $this->session->set_flashdata('Invalid Username and Password');
                $this->login();

           }
           else{
            $this->signup();
           }
     }
     function signup(){
      $this->load->view('sign_up');
     }  
 }  