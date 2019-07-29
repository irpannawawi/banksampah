<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_nasabah extends CI_Controller {

	public function index($status=[])
	{
		$this->load->view('admin/view_tambah_nasabah');
	}

	public function tambah()
	{
		$nama 		= $this->input->post('nama');
		$pin 		= $this->input->post('pin');
		$alamat 	= $this->input->post('alamat');
		$tempatLahir = $this->input->post('tempat_lahir');
		$tglLahir 	= $this->input->post('tanggal_lahir');
		$tempat_tanggal_lahir = $tempatLahir.",".$tglLahir;
		$pekerjaan 	= $this->input->post('pekerjaan');
		$data = [
			'nama'=>$nama, 
			'pin'=>$pin,
			'alamat'=>$alamat,
			'tanggal_lahir'=>$tempat_tanggal_lahir, 
			'pekerjaan'=>$pekerjaan, 
		];
		$res = $this->model_nasabah->tambah_nasabah($data);
		$nasabah = $this->model_nasabah->get_data($res['no_rekening']);

		$this->load->view('admin/view_tambah_nasabah',$nasabah);
	}
}
