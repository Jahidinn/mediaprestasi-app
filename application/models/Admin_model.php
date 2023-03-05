<?php  

class Admin_model extends CI_model {
	public function getAllUser(){
		return $this->db->get('users')->result_array();
	}
}

?>