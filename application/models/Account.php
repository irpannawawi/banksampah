<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Model {

	
	public function login($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$res = $this->db->get('admin');
		return $res;
	}

	public function logoutAdmin($path)
	{
		$this->session->unset_userdata(['admin','id_admin']);
		redirect($path);
	}
	public function logout($path)
	{
		$this->session->unset_userdata(['username','user_id']);
		redirect($path);
	}

}

