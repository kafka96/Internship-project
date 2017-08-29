   <?php  
   class Main_model extends CI_Model  
   {  
    function can_login($username, $password)  
    {  
     $this->db->where('username', $username);  
     $this->db->where('password', $password); 
     $query = $this->db->get('users'); 
     $id =$query->result(); 
             //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
     if($query->num_rows() > 0)  
     {  
      return true;  
    }  
    else  
    {  
      return false;       
    }  
  }
  function print_id($username){

    $data = $this->db->select('status')
    ->get_where('users', array('username' => $username))
    ->row()
    ->status;
    return $data;        
  }
  function register_user($name, $lastname, $username, $password, $address){
    $data = array(
        'Emri' => $name,
        'Mbiemri' => $lastname,
        'username' => $username,
        'password' => $password,
        'Adress' => $address
    );

    $this->db->insert('users', $data);
  }
  function show_data(){
    $query = $this->db->get('users');
    $this->load->view('datatable');
  }
  }  