<?php 

class Artikel_model extends CI_model {

	public function detailArtikel($url_title){
		return $this->db->get_where('article', ['url_title' => $url_title])->row_array();
	}
	public function cekTitle($title){
		return $this->db->get_where('article', ['url_title' => $title]);
	}
	public function getMyArtikel($username){
		$this->db->like('id_users', $username);
		return $this->db->get('article')->result_array();
	}

	public function addArtikel($url_title, $tanggalPosting){
		$config['upload_path']          = './assets/img/artikel-image';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 500;
		$config['max_width']            = 1860;
		$config['max_height']           = 970;
		$config['encrypt_name']         = TRUE;

		$this->load->library('upload', $config);
		if ( !$this->upload->do_upload('image'))
		{
			$error = $this->upload->display_errors();
			$this->session->set_flashdata('flash_img', $error);
			redirect('artikel/add');
		}
		else
		{
			$poster = $this->upload->data();
			$data = [
				"id_users" => $this->input->post('id_user', true),
				"tanggal" => $tanggalPosting,
				"kategori-artikel" => $this->input->post('kategori-artikel', true),
				"judul" => $this->input->post('judul', true),
				"url_title" => $url_title,
				"image" => $poster['file_name'],
				"article" => $this->input->post('isi', true),
				"keywords" => $this->input->post('keywords', true)
			];
			$this->db->insert('article', $data);
		}
	}
	public function editArtikel($url_title){
		$config['upload_path']          = './assets/img/artikel-image';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 500;
		$config['max_width']            = 1860;
		$config['max_height']           = 970;
		$config['encrypt_name']         = TRUE;

		$this->load->library('upload', $config);
		if (!empty($_FILES['image']['name'])) 
		{
			if ( !$this->upload->do_upload('image'))
			{
				$error = $this->upload->display_errors();
				$this->session->set_flashdata('flash_img', $error);
				redirect('event/edit/'.$url_title);
			}
			else
			{
				$poster = $this->upload->data();
				$path = FCPATH."assets/img/artikel-image/".$this->input->post('deleteimage');
				if (file_exists($path)) {
					$deleted = unlink($path);

				}
			}
		}else{
			$poster['file_name'] = $this->input->post('deleteimage');
		}

			$data = [
				"kategori-artikel" => $this->input->post('kategori-artikel', true),
				"judul" => $this->input->post('judul', true),
				"url_title" => $url_title,
				"image" => $poster['file_name'],
				"article" => $this->input->post('isi', true),
				"keywords" => $this->input->post('keywords', true)
			];
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('article', $data);

		// $this->db->insert('mahasiswa', $data);
	}
}
?>