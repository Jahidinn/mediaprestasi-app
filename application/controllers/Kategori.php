<?php 

class Kategori extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Event_model');
		$this->load->model('Home_model');
	}
	public function index(){
		// var_dump($this->input->get('search'));
		$data['judul'] = 'Media prestasi';
		$data['kategori']= $this->Home_model->kategori();
		$data['allEvent'] = $this->Event_model->getAllEvent();
		if ($this->input->get('search')) {
			$data['allEvent'] = $this->Event_model->cariDataEvent();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('event/kategori/all',$data);
		$this->load->view('templates/footer');

	}	
	public function lomba(){
		$data['judul'] = 'Lomba';
		$kategori = 'Lomba';
		$data['kategori']= $this->Home_model->kategori();
		$data['allLomba'] = $this->Event_model->getAllLomba($kategori);
		if ($this->input->get('search')) {
			$data['allLomba'] = $this->Event_model->cariDataLomba($kategori);
		}
		$this->load->view('templates/header', $data);
		$this->load->view('event/kategori/lomba',$data);
		$this->load->view('templates/footer');

	}	
	public function beasiswa(){
		$data['judul'] = 'Beasiswa';
		$kategori = 'Beasiswa';
		$data['kategori']= $this->Home_model->kategori();
		$data['allBeasiswa'] = $this->Event_model->getAllLomba($kategori);
		if ($this->input->get('search')) {
			$data['allBeasiswa'] = $this->Event_model->cariDataLomba($kategori);
		}
		$this->load->view('templates/header', $data);
		$this->load->view('event/kategori/beasiswa',$data);
		$this->load->view('templates/footer');

	}
	public function event(){
		$data['judul'] = 'Event';
		$kategori = 'Event';
		$data['kategori']= $this->Home_model->kategori();
		$data['event'] = $this->Event_model->getAllLomba($kategori);
		if ($this->input->get('search')) {
			$data['event'] = $this->Event_model->cariDataLomba($kategori);
		}
		$this->load->view('templates/header', $data);
		$this->load->view('event/kategori/event',$data);
		$this->load->view('templates/footer');

	}		
	public function lainya(){
		$data['judul'] = 'Lainya | Media prestasi';
		$kategori = 'Lainya';
		$data['kategori']= $this->Home_model->kategori();
		$data['lainya'] = $this->Event_model->getAllLainya($kategori);
		if ($this->input->get('search')) {
			$data['lainya'] = $this->Event_model->cariDataLainya($kategori);
		}
		$this->load->view('templates/header', $data);
		$this->load->view('event/kategori/lainya',$data);
		$this->load->view('templates/footer');

	}	
	public function ebook(){
		$data['judul'] = 'ebook';
		$data['kategori']= $this->Home_model->kategori();
		$data['ebook'] = $this->Event_model->getAllEbook();
		if ($this->input->get('search')) {
			$data['ebook'] = $this->Event_model->cariDataEbook();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('event/kategori/ebook',$data);
		$this->load->view('templates/footer');

	}

}



?>