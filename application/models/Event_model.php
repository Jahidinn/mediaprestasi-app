<?php 

class Event_model extends CI_model {

	public function getMyEvent($username){
		$this->db->like('id_users', $username);
		return $this->db->get('events')->result_array();
	}
	public function kategoriEvent(){
		return $this->db->get('categories')->result_array();
	}
	public function getProfil($myUsr){
		return $this->db->get_where('users', ['username' => $myUsr])->row_array();
	}
	public function detailEvent($link){
		return $this->db->get_where('events', ['link' => $link])->row_array();
	}
	public function getAllEvent(){
		return $this->db->get('events')->result_array();
	}
	public function cariDataEvent(){
		$keyword = $this->input->get('search', true);
		$this->db->like('kategori', $keyword);
		$this->db->or_like('judul', $keyword,'both');
		$this->db->or_like('link', $keyword);
		$this->db->or_like('instansi', $keyword);
		$this->db->or_like('deskripsi', $keyword);
		return $this->db->get('events')->result_array();
	}
	public function getAllLomba($kategori){
		return $this->db->get_where('events', ['kategori' => $kategori])->result_array();
	}
	public function cariDataLomba($kategori){
		$keyword = $this->input->get('search', true);
		$this->db->where('kategori', $kategori);
		$this->db->group_start();
		$this->db->like('kategori', $keyword);
		$this->db->or_like('judul', $keyword);
		$this->db->or_like('link', $keyword);
		$this->db->or_like('instansi', $keyword);
		$this->db->or_like('deskripsi', $keyword);
		$this->db->group_end();
		return $this->db->get('events')->result_array();
	}	
	public function getAllLainya($kategori){
		return $this->db->get_where('events', ['kategori' => $kategori])->result_array();
	}
	public function cariDataLainya($kategori){
		$keyword = $this->input->get('search', true);
		$this->db->where('kategori', $kategori);
		$this->db->group_start();
		$this->db->like('kategori', $keyword);
		$this->db->or_like('judul', $keyword);
		$this->db->or_like('link', $keyword);
		$this->db->or_like('instansi', $keyword);
		$this->db->or_like('deskripsi', $keyword);
		$this->db->group_end();
		return $this->db->get('events')->result_array();
	}
	public function getAllEbook(){
		return $this->db->get('ebook')->result_array();
	}
	public function cariDataEbook(){
		$keyword = $this->input->get('search', true);
		$this->db->like('kategori-ebook', $keyword);
		$this->db->or_like('judul', $keyword,'both');
		$this->db->or_like('url_title', $keyword);
		$this->db->or_like('file', $keyword);
		$this->db->or_like('deskripsi', $keyword);
		$this->db->or_like('keywords', $keyword);
		return $this->db->get('ebook')->result_array();
	}
	public function addEvent(){
		$config['upload_path']          = './assets/img/poster-upload';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 500;
		$config['max_width']            = 1560;
		$config['max_height']           = 1500;
		$config['encrypt_name']         = TRUE;

		$this->load->library('upload', $config);
		if ( !$this->upload->do_upload('poster'))
		{
			$error = $this->upload->display_errors();
			$this->session->set_flashdata('flash_img', $error);
			redirect('event/add');
		}
		else
		{
			
			$poster = $this->upload->data();
			$data = [

				"id_users" => $this->input->post('id_user', true),
				"kategori" => $this->input->post('kategori', true),
				"judul" => $this->input->post('judul', true),
				"link" => $this->input->post('link-event', true),
				"deadline" => $this->input->post('deadline', true),
				"image" => $poster['file_name'],
				"peserta" => $this->input->post('peserta', true),
				"instansi" => $this->input->post('penyelenggara', true),
				"deskripsi" => $this->input->post('deskripsi', true)
			];
			$this->db->insert('events', $data);
		}

		// $this->db->insert('mahasiswa', $data);
	}
	public function editEvent($link){
		$config['upload_path']          = './assets/img/poster-upload';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 500;
		$config['max_width']            = 1560;
		$config['max_height']           = 1500;
		$config['encrypt_name']         = TRUE;

		$this->load->library('upload', $config);
		if (!empty($_FILES['poster']['name'])) 
		{
			if ( !$this->upload->do_upload('poster'))
			{
				$error = $this->upload->display_errors();
				$this->session->set_flashdata('flash_img', $error);
				redirect('event/edit/'.$link);
			}
			else
			{
				$poster = $this->upload->data();
				$path = FCPATH."assets/img/poster-upload/".$this->input->post('deleteimage');
				if (file_exists($path)) {
					$deleted = unlink($path);

				}
			}
		}else{
			$poster['file_name'] = $this->input->post('deleteimage');
		}

			$data = [

				"id_users" => $this->input->post('id_user', true),
				"kategori" => $this->input->post('kategori', true),
				"judul" => $this->input->post('judul', true),
				"link" => $this->input->post('link-event', true),
				"deadline" => $this->input->post('deadline', true),
				"image" => $poster['file_name'],
				"peserta" => $this->input->post('peserta', true),
				"instansi" => $this->input->post('penyelenggara', true),
				"deskripsi" => $this->input->post('deskripsi', true)
			];
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('events', $data);

		// $this->db->insert('mahasiswa', $data);
	}
	public function komentarEvent($idevent){
		return $this->db->get_where('komentar', ['id_event' => $idevent])->result_array();
	}	
	public function jumlahKomentar($idevent){
		return $this->db->get_where('komentar', ['id_event' => $idevent])->num_rows();
	}	
	public function balasanKomentar($idevent){
		return $this->db->get_where('comment_reply', ['id_event' => $idevent])->result_array();
	}	
	public function jumlahBalasan($idevent){
		return $this->db->get_where('comment_reply', ['id_event' => $idevent])->num_rows();
	}
	public function detailUser($username){
		return $this->db->get_where('users', ['username' => $username])->row_array();
	}

	public function commentEvent(){
		date_default_timezone_set("Asia/Jakarta");
		$date = date("Y-m-d");
		$jam = date("h:i A");

		$email = $this->input->post('email', true);
		if (isset($this->session->userdata['logged_in'])) {
			$id_user = $this->input->post('id_user', true);
		}else{
			$id_user = $email;
		}

		$data = [

				"id_event" => $this->input->post('id_event', true),
				"id_user" => $id_user,
				"email" => $email,
				"nama" => $this->input->post('nama', true),
				"tanggal" => $date,
				"jam" => $jam,
				"komentar" => $this->input->post('komentar', true)
			];
			$this->db->insert('komentar', $data);

	}
	public function replyCommentEvent(){
		date_default_timezone_set("Asia/Jakarta");
		$date = date("Y-m-d");
		$jam = date("h:i A");

		$email = $this->input->post('email', true);
		if (isset($this->session->userdata['logged_in'])) {
			$id_user = $this->input->post('id_user', true);
		}else{
			$id_user = $email;
		}

		$data = [

				"id_event" => $this->input->post('id_event', true),
				"id_comment" => $this->input->post('id_comment', true),
				"id_user" => $id_user,
				"email" => $email,
				"nama" => $this->input->post('nama', true),
				"tanggal" => $date,
				"jam" => $jam,
				"balasan" => $this->input->post('komentar', true)
			];

			$this->db->insert('comment_reply', $data);

	}
}

?>