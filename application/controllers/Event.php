<?php 


class Event extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Event_model');
		$this->load->model('Home_model');
	}

	public function index(){
		redirect('kategori');
		// $data['judul'] = 'Events';
		// $data['myevent'] = $this->Event_model->getAllEvent();
		// var_dump($data['myevent']);
		// if ($this->input->get('keyword')) {
		// 	$data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
		// }
		// $this->load->view('templates/header', $data);
		// $this->load->view('user/index');
		// $this->load->view('templates/footer');

	}
	public function add(){
		if (!isset($this->session->userdata['logged_in'])) {
			redirect('');
		}
		$data['judul'] = 'Share event';
		$data['kategori']= $this->Home_model->kategori();
		$this->form_validation->set_rules('kategori','Kategori','required');
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('link-event','Link event','required|is_unique[events.link]');
		$this->form_validation->set_rules('deadline','deadline','required');
		$this->form_validation->set_rules('peserta','peserta','required');
		$this->form_validation->set_rules('penyelenggara','penyelenggara','required');
		$this->form_validation->set_rules('deskripsi','deskripsi','required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('event/add', $data);
			$this->load->view('templates/footer');
		}

		else {
			$this->Event_model->addEvent();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('view/'.$this->input->post('link-event'));
		}
	}
	public function edit($link){
		if (!isset($this->session->userdata['logged_in'])) {
			redirect('');
		}
		$data['judul'] = 'Share event';
		$data['kategori']= $this->Home_model->kategori();
		$data['editEvent'] = $this->Event_model->detailEvent($link);
		$data['kategori'] = $this->Event_model->kategoriEvent();

		if($this->input->post('link-event') != $data['editEvent']['link']) {
			$link_unique =  '|is_unique[events.link]';
		} else {
			$link_unique =  '';
		}

		$this->form_validation->set_rules('kategori','Kategori','required');
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('link-event','Link event','required'.$link_unique);
		$this->form_validation->set_rules('deadline','deadline','required');
		$this->form_validation->set_rules('peserta','peserta','required');
		$this->form_validation->set_rules('penyelenggara','penyelenggara','required');
		$this->form_validation->set_rules('deskripsi','deskripsi','required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('event/edit', $data);
			$this->load->view('templates/footer');
		}

		else {
			$this->Event_model->editEvent($link);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('view/'.$this->input->post('link-event'));
		}
	}
	public function detail($link) {
		$data['judul'] = 'Detail';
		$data['kategori']= $this->Home_model->kategori();
		$data['detailEvent'] = $this->Event_model->detailEvent($link);
		$idevent = $data['detailEvent']['id'];
		$data['komentar'] = $this->Event_model->komentarEvent($idevent);
		$data['jumlahKomentar'] = $this->Event_model->jumlahKomentar($idevent);	
		
		$data['balasan_komentar'] = $this->Event_model->balasanKomentar($idevent);
		$data['jumlahBalasanKomentar'] = $this->Event_model->jumlahBalasan($idevent);

		if (isset($this->session->userdata['logged_in'])) {
			$username = $this->session->userdata['username'];
			$data['detailUser'] = $this->Event_model->detailUser($username);
		}
		$this->load->view('templates/header', $data);
		$this->load->view('event/detail');
		$this->load->view('templates/footer');

	}
	public function comment(){
		$link_event = $this->input->post('link', true);

		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('komentar','komentar','required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('komentar-error', 'semua field harus diisi sob!');
			redirect($link_event);
		}
		else{
		$this->Event_model->commentEvent();
		redirect($link_event);
		}

	}
	public function replyComment(){
		$link_event = $this->input->post('link', true);

		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('komentar','komentar','required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('komentar-error', 'semua field harus diisi sob!');
			redirect($link_event);
		}
		else{
		$this->Event_model->replyCommentEvent();
		redirect($link_event);
		}

	}




}