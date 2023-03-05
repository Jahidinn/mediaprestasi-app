<?php 


class Ebook extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Ebook_model');
		$this->load->model('Home_model');
	}

	public function index(){
		$data['judul'] = 'Artiel';
		$data['kategori']= $this->Home_model->kategori();
		$data['myebook'] = $this->Ebook_model->getAllEbook();
		var_dump($data['myevent']);
		// if ($this->input->get('keyword')) {
		// 	$data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
		// }
		$this->load->view('templates/header', $data);
		$this->load->view('ebook/index');
		$this->load->view('templates/footer');

	}
	public function detail($url_title) {
		$data['kategori']= $this->Home_model->kategori();
		$data['judul'] = 'Detail';
		$data['detailEbook'] = $this->Ebook_model->detailEbook($url_title);
		$this->load->view('templates/header', $data);
		$this->load->view('ebook/detail', $data);
		$this->load->view('templates/footer');

	}
	public function download($url_title){	
		$data['downloadEbook'] = $this->Ebook_model->detailEbook($url_title);
		$file = file_get_contents(base_url().'assets/ebook/'.$data['downloadEbook']['file']);			
		$nama = $data['downloadEbook']['file'];
		force_download($nama, $file);
		// var_dump($data['downloadEbook']['file']);
	}
	public function add(){
		if (!isset($this->session->userdata['logged_in'])) {
			redirect('');
		}
		$data['judul'] = 'Share ebook';
		$data['kategori']= $this->Home_model->kategori();
		$this->form_validation->set_rules('kategori-ebook','Kategori-ebook','required');
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('deskripsi','deskripsi','required');
		$this->form_validation->set_rules('keywords','keywords','required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('ebook/add', $data);
			$this->load->view('templates/footer');
		}

		else {
			date_default_timezone_set("Asia/Jakarta");
			$date = date("-m-Y");
			$tanggalPosting = date("Y-m-d");

			$title = url_title($this->input->post('judul'), 'dash', TRUE);
			$cekurl = $this->Ebook_model->cekTitle($title);
			
			if ($cekurl->num_rows()) {
				$url_title = $title.$date;
			}
			else{
				$url_title = $title;
			}
			$this->Ebook_model->addEbook($url_title,$tanggalPosting);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('ebook/detail/'.$url_title);
		}
	}

	public function edit($url_title){
		if (!isset($this->session->userdata['logged_in'])) {
			redirect('');
		}
		$data['judul'] = 'Edit ebook';
		$data['kategori']= $this->Home_model->kategori();
		$data['editEbook'] = $this->Ebook_model->detailEbook($url_title);
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
				$cekurl = $this->Ebook_model->cekTitle($title);

				if ($cekurl->num_rows()) {
					$url_title = $title.$date;
				}
				else{
					$url_title = $title;
				}
			}
			$this->Ebook_model->editEbook($url_title);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('ebook/detail/'.$url_title);
		}
	}





}