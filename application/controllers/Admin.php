<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index($status='')
	{
		if (isset($this->session->admin)) {
			redirect('admin/home');
		}
		$data = ['status'=>$status];
		$this->load->view('admin/login',$data);
	}

	public function home()
	{
		$this->load->view('admin/home');
	}

	public function login()
	{ 

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$status = $this->account->login($username,$password);
		
		if ($status->num_rows() == 1) {
			$id = $status->result();
			$id = $id[0]->id_admin;
			$this->session->set_userdata('admin',$username);
			$this->session->set_userdata('id_admin',$id);
			redirect('admin/home');
		}else{
			redirect('admin/index/0');
		}
	}

	public function logout()
	{
		$this->account->logoutAdmin('admin');
	}

}
