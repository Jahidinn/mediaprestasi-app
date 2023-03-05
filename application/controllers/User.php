<?php

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Event_model');
		$this->load->model('User_model');
		$this->load->model('Artikel_model');
		$this->load->model('Home_model');
		$this->load->model('Ebook_model');

	}

	public function index(){
		redirect('');
	}

	public function detail($username){

		$data['judul'] = 'Detail mahasiswa';
		$data['kategori']= $this->Home_model->kategori();
		$data['user'] = $this->User_model->getUserById($username);
		$data['myevent'] = $this->Event_model->getMyEvent($username);
		$data['myartikel'] = $this->Artikel_model->getMyArtikel($username);
		$data['myebook'] = $this->Ebook_model->getMyEbook($username);

		$idUser = $data['user']['username'];
		$data['jumlahEvent'] = $this->User_model->jumlahEvent($idUser);
		$data['jumlahArtikel'] = $this->User_model->jumlahArtikel($idUser);
		$data['jumlahEbook'] = $this->User_model->jumlahEbook($idUser);

		if (!$data['user']) {
			redirect('');
		}
		$this->load->view('templates/header', $data);
		$this->load->view('user/index',$data);
		$this->load->view('templates/footer');
	}
	public function edit ($username){
		if ($username != $this->session->userdata['username']) {
			redirect('');
		}
		$data['judul'] = 'Edit profil';
		$data['kategori']= $this->Home_model->kategori();
		$data['editUser'] = $this->User_model->getUserById($username);
		if($this->input->post('username') != $data['editUser']['username']) {
			$usr_unique =  '|is_unique[users.username]';
		} else {
			$usr_unique =  '';
		}
		if($this->input->post('email') != $data['editUser']['email']) {
			$email_unique =  '|is_unique[users.email]';
		} else {
			$email_unique =  '';
		}

		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('username','username','required'.$usr_unique);
		$this->form_validation->set_rules('email','email','required|valid_email'.$email_unique);
		$this->form_validation->set_rules('catatan','catatan','required');
		$this->form_validation->set_rules('password','password','required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header', $data);
			$this->load->view('user/edit',$data);
			$this->load->view('templates/footer');
		}
		else {
			$this->User_model->ubahDataUser($username);
			$username = $this->input->post('username', true);
			$ses = array(
				'username'  => $username,
				'email'  => '',
				'logged_in' => TRUE
			);
			$this->session->set_userdata($ses);
			var_dump($username);
			var_dump($ses);
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('member/'.$username);

		}

	}
}

?>