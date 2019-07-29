<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nasabah extends CI_Controller {
	public function index()
	{
		$this->load->view('admin/view_nasabah.php');

	}
	public function search()
	{
		$norek = $this->input->post('no_rekening');
		//get user data
		$user = $this->model_nasabah->get_where_norek($norek);
		if ($user->num_rows()<1) {
			redirect('nasabah');
		}
		$result = $user->result()[0];
		//get log input
		$log_input = $this->model_nasabah->get_log_input($norek);
		// get log penarikan
		$log_penarikan = $this->model_nasabah->get_log_penarikan($norek);
		$data = [
			'userdata'=>$result,
			'log_input'=>$log_input,
			'log_penarikan'=>$log_penarikan
		];
		$this->load->view('admin/view_nasabah',$data);
	}
}
