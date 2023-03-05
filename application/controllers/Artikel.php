<?php 


class Artikel extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Artikel_model');
		$this->load->model('Home_model');
	}

	public function index(){
		
		$data['judul'] = 'Artiel';
		$data['kategori']= $this->Home_model->kategori();
		$data['myevent'] = $this->Artikel_model->getAllArtikel();
		var_dump($data['myevent']);
		// if ($this->input->get('keyword')) {
		// 	$data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
		// }
		$this->load->view('templates/header', $data);
		$this->load->view('artikel/index');
		$this->load->view('templates/footer');

	}
	public function detail($url_title) {
		$data['judul'] = 'Detail';
		$data['kategori']= $this->Home_model->kategori();
		$data['detailArtikel'] = $this->Artikel_model->detailArtikel($url_title);
		$this->load->view('templates/header', $data);
		$this->load->view('artikel/detail', $data);
		$this->load->view('templates/footer');

	}

	public function add(){
		if (!isset($this->session->userdata['logged_in'])) {
			redirect('login');
		}
		$data['judul'] = 'Share Artikel';
		$data['kategori']= $this->Home_model->kategori();
		$this->form_validation->set_rules('kategori-artikel','Kategori-artikel','required');
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('isi','isi','required');
		$this->form_validation->set_rules('keywords','keywords','required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('artikel/add', $data);
			$this->load->view('templates/footer');
		}

		else {
			date_default_timezone_set("Asia/Jakarta");
			$date = date("-m-Y");
			$tanggalPosting = date("Y-m-d");


			$title = url_title($this->input->post('judul'), 'dash', TRUE);
			$cekurl = $this->Artikel_model->cekTitle($title);
			
			if ($cekurl->num_rows()) {
				$url_title = $title.$date;
			}
			else{
				$url_title = $title;
			}
			$this->Artikel_model->addArtikel($url_title, $tanggalPosting);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('artikel/detail/'.$url_title);
		}
	}
	public function edit($url_title){
		if (!isset($this->session->userdata['logged_in'])) {
			redirect('');
		}
		$data['judul'] = 'Edit artikel';
		$data['kategori']= $this->Home_model->kategori();
		$data['editArtikel'] = $this->Artikel_model->detailArtikel($url_title);
		// $data['kategori'] = $this->Artikel_model->kategoriArtikel();

		$this->form_validation->set_rules('kategori-artikel','Kategori-artikel','required');
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('isi','isi','required');
		$this->form_validation->set_rules('keywords','keywords','required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('artikel/edit', $data);
			$this->load->view('templates/footer');
		}

		else {
			$judulBaru = $this->input->post('judul', true);
			$judulLama = $data['editArtikel']['judul'];
			if ($judulBaru === $judulLama) {
				$url_title = $url_title;
			}
			else {
				date_default_timezone_set("Asia/Jakarta");
				$date = date("-m-Y");

				$title = url_title($this->input->post('judul'), 'dash', TRUE);
				$cekurl = $this->Artikel_model->cekTitle($title);

				if ($cekurl->num_rows()) {
					$url_title = $title.$date;
				}
				else{
					$url_title = $title;
				}
			}
			$this->Artikel_model->editArtikel($url_title);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('artikel/detail/'.$url_title);
		}
	}





}