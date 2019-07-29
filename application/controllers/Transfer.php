<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transfer extends CI_Controller {

	public function index()
	{
		if (!empty($this->input->post('no_rekening'))) {
			$no_rekening 		= $this->input->post('no_rekening');
			$no_rekening_tujuan = $this->input->post('no_rekening_tujuan');
			$jumlah 			= $this->input->post('jumlah');
			//send
			$res = $this->model_transfer->send($no_rekening, $no_rekening_tujuan, $jumlah);	
		}
		$this->load->view('admin/view_transfer');
	}
}
