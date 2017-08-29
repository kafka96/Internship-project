<?php
	class simple_model extends CI_Model{

		function get_user_name($username){
			$data = $this->db->select('Emri')
                  ->get_where('users', array('username' => $username))
                  ->row()
                  ->Emri;
          	return $data;
		}
		function get_user_lastname($username){
			$data = $this->db->select('Mbiemri')
                  ->get_where('users', array('username' => $username))
                  ->row()
                  ->Mbiemri;
          	return $data;
		}
		function get_user_adress($username){
			$data = $this->db->select('Adress')
                  ->get_where('users', array('username' => $username))
                  ->row()
                  ->Adress;
          	return $data;
		}
		function change_data($username, $Emri, $Mbiemri, $Adress){

			$data = array(
               'Emri' => $Emri,
               'Mbiemri' => $Mbiemri,
               'Adress' => $Adress
            );
			 $this->db->where('username', $username);
			$this->db->update('users', $data);
		}

	}