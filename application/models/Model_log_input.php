<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_log_input extends CI_Model {

	
	public function insert($data)
	{
		$this->db->insert('log_input',$data);
		return 0;
	}

	public function log($norek)
	{
		$this->db->where('no_rekening',$norek);
		$res = $this->db->get('log_input');
		return $res->result();
	}

}

