<?php 
class User_model extends CI_model {

	public function registerUser(){
		$data = [
			"username" => strtolower($this->input->post('username', true)),
			"email" => $this->input->post('email', true),
			"password" => $this->encryption->encrypt($this->input->post('password', true)),
			"nama" => $this->input->post('username', true),
			"catatan" => 'Mulailah dari sekarang atau orang lain yang akan memulainya'

		];
		$this->db->insert('users', $data);
	}
	
	public function cekUsername($username){
		return $this->db->get_where('users', ['username' => $username]);
	}
	public function cekEmail($username){
		return $this->db->get_where('users', ['email' => $username]);
	}
	public function getUserById($username){
		return $this->db->get_where('users', ['username' => $username])->row_array();
	}
	public function jumlahEvent($iduser){
		return $this->db->get_where('events', ['id_users' => $iduser])->num_rows();
	}	
	public function jumlahArtikel($iduser){
		return $this->db->get_where('article', ['id_users' => $iduser])->num_rows();
	}	
	public function jumlahEbook($iduser){
		return $this->db->get_where('ebook', ['id_users' => $iduser])->num_rows();
	}
	public function ubahDataUser($username){

		$config['upload_path']          = './assets/img/profile';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 500;
		$config['max_width']            = 1820;
		$config['max_height']           = 970;
		$config['overwrite'] = TRUE;
		$config['encrypt_name']         = TRUE;

		$this->load->library('upload', $config);
		if (!empty($_FILES['foto']['name'])) 
		{
			if ( !$this->upload->do_upload('foto'))
			{
				$error = $this->upload->display_errors();
				$this->session->set_flashdata('flash_img', $error);
				redirect('user/edit/'.$username);
			}
			else{
				$foto = $this->upload->data();
				$path = FCPATH."assets/img/profile/".$this->input->post('deletefoto');
				if (file_exists($path)) {
					$deleted = unlink($path);
				}
			}
		}else{
			$foto['file_name'] = $this->input->post('deletefoto');
		}

		$data = [
			"nama" => strtolower($this->input->post('nama', true)),
			"username" => $this->input->post('username', true),
			"foto" => $foto['file_name'],
			"email" => $this->input->post('email', true),
			"catatan" => $this->input->post('catatan', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('users', $data);

	}
}



?>