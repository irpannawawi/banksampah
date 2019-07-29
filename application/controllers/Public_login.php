<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Public_login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function login()
	{
		$norek = $this->input->post('no_rekening');
		$pin = $this->input->post('pin');

		$nasabah = $this->model_nasabah->login($norek,$pin);
		//cek  validasi

		if ($nasabah->num_rows() >=1 ) {
			$res = $nasabah->result()[0];
			$username 	= $res->nama;
			$userId 	= $res->no_rekening;
			$this->session->username = $username;
			$this->session->id_user = $userId;
			
			redirect('public_home');
		}else{
			$this->session->set_flashdata('error','Rekening atau pin salah');
			$this->load->view('login',['error'=>$this->session->error]);
		}
	}

	public function logout()
	{
		$this->account->logout('public_login');
	}
}
