<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Input_sampah extends CI_Controller {
	public function index($status='')
	{
		$harga = $this->harga->getHarga();
		$data = ['harga'=>$harga, 'status'=>$status];
		$this->load->view('admin/view_input_sampah',$data);
	}
	public function input()
	{
		$no_rekening 	= $this->input->post('no_rekening');
		$jenis 			= $this->input->post('jenis');
		$jumlah 		= $this->input->post('jumlah');
		$password 		= $this->input->post('password');
		$harga_sampah 	= $this->harga->getWhereHarga($jenis);
		//cek nasabah valid
		$num_nasabah = $this->model_nasabah->get_where_norek($no_rekening)->num_rows();
		//cek admin valid
		$username = $this->session->admin;
		$admin = $this->account->login($username,$password);
		if ($admin->num_rows()<1) {
			redirect('input_sampah/index/0');
			die;
		}
		if ($num_nasabah >=1 ) {
		//nasabah valid
				$data = [
				'no_rekening'=>$no_rekening,
				'tanggal'=>date('d/m/Y'),
				'jenis'=>$jenis,
				'jumlah'=>$jumlah,
				'harga'=>$jumlah*$harga_sampah
			];
		//update saldo
			$this->model_nasabah->update_saldo($no_rekening,$data['harga']);
		//insert log
			$this->model_log_input->insert($data);
			redirect('input_sampah/index/1');
		}
	}
}
