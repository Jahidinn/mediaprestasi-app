<?php 

class Delete extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Delete_model');
	}
		
	public function event($link){
		$username = $this->input->get('username');
		$this->Delete_model->deleteEvent($link);
		redirect('member/'.$username);
	}		
	public function artikel($url_title){
		$username = $this->input->get('username');
		$this->Delete_model->deleteArtikel($url_title);
		redirect('member/'.$username);
	}

}
 ?>