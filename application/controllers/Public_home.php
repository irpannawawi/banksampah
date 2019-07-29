<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Public_home extends CI_Controller {

	public function index()
	{
		$norek = $this->session->id_user;
		$res = $this->model_nasabah->get_where_norek($norek);
		$nasabah = $res->result()[0];
		$data = ['nasabah'=>$nasabah];
		$this->load->view('view_public_home',$data);
	}
}
