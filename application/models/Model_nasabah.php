<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_nasabah extends CI_Model {

	public function tambah_nasabah($data)
	{
		$norek1 = rand(100000,999999).date('md');
		$norek2 = str_split($norek1,4);
		$norek = implode("-", $norek2);
		// tambah rules cek no rekening !!!

		$value = [
			'no_rekening'=>$norek,
			'nama'=>$data['nama'],
			'pin'=>$data['pin'],
			'alamat'=>$data['alamat'],
			'tanggal_lahir'=>$data['tanggal_lahir'],
			'pekerjaan'=>$data['pekerjaan'],
		];
		$res = $this->db->insert('nasabah',$value);
		if ($res) {
			return ['status'=>1, 'no_rekening'=>$norek];
		}else{
			return 0;
		}
	}

	public function get_where_norek($norek)
	{
		$this->db->where('no_rekening',$norek);
		$res = $this->db->get('nasabah');

		return $res;
	}

	public function get_data($parm)
	{
		$sql = "SELECT * FROM nasabah WHERE no_rekening = '$parm'";
		$res = $this->db->query($sql);
		return $res->result_array()[0];
	}

	public function set_saldo($norek,$saldo)
	{
		$this->db->set('saldo',$saldo);
		$this->db->where('no_rekening',$norek);
		$this->db->update('nasabah');
		return 0;
	}

	public function update_saldo($norek,$saldo)
	{
		$saldo_lama = $this->get_where_norek($norek)->result()[0];
		$saldo = $saldo+$saldo_lama->saldo;
		$this->db->set('saldo',$saldo);
		$this->db->where('no_rekening',$norek);
		$this->db->update('nasabah');
		return 0;
	}

	public function get_log_input($norek)
	{
		$this->db->where('no_rekening',$norek);
		$res = $this->db->get('log_input');
		return $res->result();
	}

	public function get_log_penarikan($norek)
	{
		$this->db->where('no_rekening',$norek);
		$res = $this->db->get('log_penarikan');
		return $res->result();
	}

	public function login($norek,$pin)
	{
		$this->db->where('no_rekening',$norek);
		$this->db->where('pin',$pin);
		$res = $this->db->get('nasabah');
		return $res;
	}
}
