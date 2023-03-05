<?php 

class Delete_model extends CI_model {

	public function deleteEvent($link){
		$this->db->where('link', $link);
		$this->db->delete('events');
		$path = FCPATH."assets/img/poster-upload/".$this->input->get('img');
				if (file_exists($path)) {
					unlink($path);

				}
	}	
	public function deleteArtikel($url_title){
		$this->db->where('url_title', $url_title);
		$this->db->delete('article');
		$path = FCPATH."assets/img/artikel-image/".$this->input->get('img');
				if (file_exists($path)) {
					unlink($path);

				}
	}
}

?>