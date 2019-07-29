<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Public_transfer extends CI_Controller {

	public function index()
	{
		$this->load->view('view_public_transfer');
	}

	public function transfer()
	{
		$norek_tujuan 	= $this->input->post('no_rekening');
		$norek 			= $this->session->id_user;
		$jumlah 		= $this->input->post('jumlah');
		$pin 			= $this->input->post('pin');
		//CEK TUJUAN VALID
		$result = $this->model_nasabah->get_where_norek($norek_tujuan);
		
		if ($result->num_rows() == 1) {
			//cek user valid
			$res = $this->model_nasabah->login($norek,$pin);
			if ($res->num_rows() == 1) {
				//cek saldo pengirim
				if ($res->result()[0]->saldo >= $jumlah) {
					$status =1;
					$user = $result->result()[0];
				}else{
					$status = 0;
				}
			}else{
				$status = 0;
			}
		}else{
			$status =0;
		}
		//end checking
		if ($status == 1) {
			$this->model_transfer->send($norek,$norek_tujuan,$jumlah);
			echo "<div class=\"alert alert-success alert-dismissible\">
    				<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    				<strong>Berhasil kirim saldo kepada $user->nama senilai Rp. $jumlah .
  					</div>";
		}else{
			echo "<div class=\"alert alert-danger alert-dismissible\">
    				<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    				<strong>Kesalahan saat transfer</strong>, cek kembali no rekening tujuan, saldo yang anda miliki atau pin!
  					</div>";
		}

	}
}
