<?php

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Home_model');
		$this->load->helper('text');

	}

	public function index(){

		$data['judul'] = 'Home';
		$data['eventTerbaru']= $this->Home_model->eventTerbaru();
		$data['eventRandom']= $this->Home_model->eventRandom();
		$data['kategori']= $this->Home_model->kategori();
		$data['artikelTerbaru']= $this->Home_model->artikelTerbaru();

		$data['jumlahEvent'] = $this->Home_model->jumlahEvent();
		$data['jumlahEbook'] = $this->Home_model->jumlahEbook();
		$data['jumlahUser'] = $this->Home_model->jumlahUser();

		$this->load->view('templates/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');
	}
	public function linkModal(){
		$link = $this->input->post('link');
		echo json_encode($this->Home_model->detailKategori($link));
		
	}
}

?>