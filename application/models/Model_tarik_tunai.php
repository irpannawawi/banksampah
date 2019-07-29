<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_tarik_tunai extends CI_Model {

	
	public function tarik($norek, $jumlah)
	{
		//dapatkan saldo lama
		$res = $this->model_nasabah->get_where_norek($norek);
		$nasabah = $res->result()[0];
		$saldo_lama = $nasabah->saldo;
		//kurangi saldo lama
		$saldo = $saldo_lama-$jumlah;

		//update saldo
		$this->db->set('saldo',$saldo);
		$this->db->where('no_rekening',$norek);
		$this->db->update('nasabah');

		//insert to log_penarikan
			$data = [
				'no_rekening'=>$norek,
				'tanggal'=>date('d/m/Y'),
				'jumlah'=>$jumlah
			];
			$this->db->insert('log_penarikan',$data);
		return 1;


	}

	public function log($norek)
	{
		$this->db->where('no_rekening',$norek);
		$res = $this->db->get('log_penarikan');
		return $res->result();
	}

}

