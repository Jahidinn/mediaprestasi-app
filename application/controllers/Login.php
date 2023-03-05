<?php

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Home_model');

	}
	public function index(){
		if (isset($_SERVER['HTTP_REFERER'])) {
			$urlredirect =  $_SERVER['HTTP_REFERER'];
		}
		
		if (isset($this->session->userdata['logged_in'])) {
			redirect('');
		}

		$data['judul'] = 'Login';
		$data['kategori']= $this->Home_model->kategori();
		$this->form_validation->set_rules('username','Nama','required');
		$this->form_validation->set_rules('password','Password','required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('login/index', $data);
			$this->load->view('templates/footer');
		}
		else {
			$this->load->model('User_model');

			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$cek = $this->User_model->cekUsername($username);
			
			if (!$cek->num_rows()) {
				$cek = $this->User_model->cekEmail($username);
				if ($cek->num_rows()) {

					if ($this->encryption->decrypt($cek->row()->password) === $password) {
						$username = $cek->row()->username;
						$email = $cek->row()->email;
						$newdata = array(
							'username'  => $username,
							'email'     => $email,
							'logged_in' => TRUE
						);

						$this->session->set_userdata($newdata);
						$username_ses = $this->session->userdata['username'];
						redirect('member/'.$username_ses);
					}else{
						$this->session->set_flashdata('flash_error_pas', 'Password salah sob!');
						$this->session->set_flashdata('flash_error_user', $username);
						$this->session->set_flashdata('flash_error_pasword', $password);
						redirect('login');
					}

				} else {
					$this->session->set_flashdata('flash_error_usr', 'Username/email tidak terdaftar');
					$this->session->set_flashdata('flash_error_user', $username);
					$this->session->set_flashdata('flash_error_pasword', $password);
					redirect('login');
				}

			}else {
				if ($this->encryption->decrypt($cek->row()->password) === $password) {
					$username = $cek->row()->username;
					$email = $cek->row()->email;
					$newdata = array(
						'username'  => $username,
						'email'     => $email,
						'logged_in' => TRUE
					);
					$this->session->set_userdata($newdata);
					$username_ses = $this->session->userdata['username'];
					redirect('member/'. $username_ses);
					var_dump($newdata);
				}else{
					$this->session->set_flashdata('flash_error_pas', 'Password salah sob!');
					$this->session->set_flashdata('flash_error_user', $username);
					$this->session->set_flashdata('flash_error_pasword', $password);
					redirect('login');
				}
			}

		}
	}
}

?>