<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function __construct()
   	{
   		parent::__construct();
        $this->load->database();
        $this->load->model('namen', 'namen_model');
        $this->load->helper('url');
  	 }

	public function index()
	{
		$namen = $this->namen_model->getAllNames();
		$data = array(
			"pietje" => $namen
		);
		$this->load->view('namen', $data);
	}

	public function edit($f_id = 0){
		$current_name = $this->namen_model->getName($f_id);
		$data = array(
			"name" => $current_name
		);
		$this->load->view('edit', $data);
	}

	public function save(){
		if($this->input->post()){
			$this->namen_model->updateName($this->input->post('id'), $this->input->post('naam'));
		}
		redirect('http://localhost/index.php/welcome/edit/' . $this->input->post('id') . '?saved=1');
	}

}
