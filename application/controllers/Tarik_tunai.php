<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarik_tunai extends CI_Controller {

	public function index($status = '')
	{
		$data = ['status'=>$status];
		$this->load->view('admin/view_tarik_tunai',$data);
	}

	public function process()
	{
		$norek = $this->input->post('no_rekening');
		$jumlah = $this->input->post('jumlah');
		$password = $this->input->post('password');

		//cek nasabah valid?
		$nasabah = $this->model_nasabah->get_where_norek($norek);
		$msg = '';
		$result = $nasabah->result()[0];
		//cek admin valid ?
		$username = $this->session->admin;
		$admin = $this->account->login($username,$password);
		if ($nasabah->num_rows()==1 && $admin->num_rows()==1 && $result->saldo !=0 ) {
			$status = 1;
		}else{
			$status = 0;
			$msg = "nasabah tidak valid";
		}

		if ($status == 1 ) {
			//proses penarikan saldo
			$update = $this->model_tarik_tunai->tarik($norek,$jumlah);
			redirect('tarik_tunai/index/1');
		}else{
			redirect('tarik_tunai/index/0');
		}
	}
}
