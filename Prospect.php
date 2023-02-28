<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prospect extends CI_Controller {

	public function index()
	{
		$this->load->model('model');
		
		$this->load->view('index');

		
	}

// 	public function regex_check($str)
// {
//     if (preg_match("", $str))
//     {
//         $this->form_validation->set_message('regex_check', 'The %s field is not valid!');
//         return FALSE;
//     }
//     else
//     {
//         return TRUE;
//     }
// }

	public function store(){

		$now = date('Y-m-d H:i:s');


		$this->form_validation->set_rules('status', 'status', 'required|min_length[2]|is_unique[prospect.status]|regex_match[/^[a-z A-Z 0-9 #$@]+$/]');
		if ($this->form_validation->run()){

		$data=[
			'status'=>$this->input->post('status'),
			'creator'=>$this->input->post('creator'),
			'date'=>$now		
		];
		
		$this->load->model('model');
		$this->model->insert($data);
		// $this->db->insert('prospect',$data);
 		echo '<script>alert("Data Inserted")</script>';
		redirect(base_url('Prospect/index'));
		// $this->index();
	}

	else {
		$this->load->model('model');
		$this->load->view('index');
		// redirect(base_url('index'));
}
		 
	}

	public function edit($id)
	{
		$this->load->model('model');
		$data['status'] = $this->model->edit($id);
		$this->load->view('edit',$data);
	}
	
	
	public function update($id)
	{
		$now = date('Y-m-d H:i:s');

		$this->form_validation->set_rules('status', 'status', 'required|min_length[2]|is_unique[prospect.status]|regex_match[/^[a-z A-Z 0-9 #$@]+$/]');
		if ($this->form_validation->run())
		{

		$data=[
			'status'=>$this->input->post('status'),
			'creator'=>$this->input->post('creator'),
			'date'=>$now	
		];
		echo "<script>alert('Data Updated')</script>";
		$this->load->model('model');
		$this->model->update($data,$id);
		$this->index();
	}

		else
		 {
		$this->session->set_flashdata('status',"<script>alert('Not updated')</script>)");
		// redirect(base_url('Prospect/index'));
		}
	}
}

?>