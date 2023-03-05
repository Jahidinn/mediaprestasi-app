<?php

class Register extends CI_Controller {
		public function __construct(){
		parent::__construct();
		$this->load->model('Home_model');

	}
	public function index(){
		$data['judul'] = 'Register';
		$data['kategori']= $this->Home_model->kategori();
		$this->form_validation->set_rules('username','Username','required|is_unique[users.username]');
		$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('password2', 'Konfirmasi password', 'required|matches[password]');



		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('register/index', $data);
			$this->load->view('templates/footer');
		}
		else {
			$this->load->model('User_model');
			$this->User_model->registerUser();
			$this->session->set_flashdata('flash', 'Berhasil');
			redirect('login');
		}
	}


	
}

?>