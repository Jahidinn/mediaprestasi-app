<?php  

class Home_model extends CI_model {
	public function kategori(){
		return $this->db->get('categories')->result_array();
	}	
	public function eventTerbaru(){
		return $this->db->select("*")->limit(8)->order_by('id',"DESC")->get("events")->result_array();
	}
	public function eventRandom(){
		return $this->db->select("*")->limit(8)->order_by('id',"RANDOM")->get("events")->result_array();
	}
	public function artikelTerbaru(){
		return $this->db->select("*")->limit(4)->order_by('id',"DESC")->get("article")->result_array();
	}
	public function detailKategori($link){
		return $this->db->get_where('categories', ['link' => $link])->row_array();
	}
	public function jumlahEvent(){
		return $this->db->get('events')->num_rows();
	}
	public function jumlahEbook(){
		return $this->db->get('ebook')->num_rows();
	}
	public function jumlahUser(){
		return $this->db->get('users')->num_rows();
	}	
}

?>