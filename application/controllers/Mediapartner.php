<?php

class Mediapartner extends CI_Controller {

	public function index(){
		$data['judul'] = 'Media partner';
		$this->load->model('Home_model');
		$data['kategori']= $this->Home_model->kategori();
		$this->load->view('templates/header', $data);
		$this->load->view('mediapartner/index', $data);
		$this->load->view('templates/footer');
	}
}

?>