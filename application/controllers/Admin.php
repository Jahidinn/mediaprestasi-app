<?php
class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');

	}

	public function index(){

		$data['judul'] = 'Data user';
		$data['user'] = $this->Admin_model->getAllUser();
		$data['kategori']= $this->Home_model->kategori();
		// if ($this->input->get('keyword')) {
		// 	$data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
		// }
		$this->load->view('templates/header', $data);
		$this->load->view('admin/index');
		$this->load->view('templates/footer');

	}
}