<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Harga extends CI_Model {

	
	public function getHarga()
	{
		$sql = "SELECT * FROM harga_sampah ";
		$res = $this->db->query($sql);
		return $res->result();

	}

	public function getWhereHarga($jenis)
	{

		$sql = "SELECT * FROM harga_sampah WHERE jenis = '$jenis' ";
		$res = $this->db->query($sql);
		$harga = $res->result()[0];
		return $harga->harga;
	}

	public function inputHarga($data)
	{
		$this->db->insert('harga_sampah',$data);
		return 0;
	}

	public function hapusHarga($id)
	{
		$this->db->where('id_harga_sampah',$id);
		if ($this->db->delete('harga_sampah')) {
			return 1;
		}else{
			echo "gagal";
			die;
		}
	}
}
