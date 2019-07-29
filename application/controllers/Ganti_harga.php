<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ganti_harga extends CI_Controller {

	public function index()
	{
		$res = $this->harga->getHarga();
		$data = ['harga'=>$res];
		$this->load->view('admin/view_ganti_harga',$data);
	}

	public function input()
	{
		$jenis = $this->input->post('jenis');
		$harga = $this->input->post('harga');
		$jenis = strtoupper($jenis);
		$data = ['jenis'=>$jenis, 'harga'=>$harga];
		$this->harga->inputHarga($data);
		redirect('ganti_harga');
	}

	public function hapus($id)
	{
		$this->harga->hapusHarga($id);
		redirect('ganti_harga');
	}
}
