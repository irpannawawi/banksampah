<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Public_log extends CI_Controller {

	public function index()
	{
		$norek = $this->session->id_user;
		$penarikan = $this->model_tarik_tunai->log($norek);
		$input = $this->model_log_input->log($norek);
		$transfer = $this->model_transfer->log($norek);
		$data = [
			'penarikan'=>$penarikan,
			'input'=>$input,
			'transfer'=>$transfer
		];
		$this->load->view('view_public_log',$data);
	}
}
