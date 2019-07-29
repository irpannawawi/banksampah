<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_transfer extends CI_Model {

	
	public function send($no_rekening, $no_rekening_tujuan, $jumlah)
	{
		
		//set saldo awal
		$user = $this->model_nasabah->get_where_norek($no_rekening);
		$result = $user->result()[0];
		//kurangi saldo
		$saldo = $result->saldo-$jumlah;
		//update saldo pengirim
		$this->model_nasabah->set_saldo($no_rekening,$saldo);

		
		//update saldo penerima
		$this->model_nasabah->update_saldo($no_rekening_tujuan,$jumlah);

		//insert to log
		date_default_timezone_set("Asia/Jakarta");
		$data = [
			'no_rekening'=>$no_rekening,
			'no_rekening_tujuan'=>$no_rekening_tujuan,
			'tanggal'=>date('d/m/Y H:i:s'),
			'jumlah'=>$jumlah
		];
		$this->db->insert('transfer',$data);
		return 1;
	}

	public function log($norek)
	{
		$this->db->where('no_rekening',$norek);
		$res = $this->db->get('transfer');
		return $res->result();
	}

}

