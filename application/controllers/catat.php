<?php
/*
catatan Flag
0 = pemasukan
1 = pengeluaran Transportasi
2 = pengeluaran Konsumsi
3 = pengeluaran hiburan
4 = pengeluaran lain-lain
*/
class Catat extends CI_Controller
{
	function Catat()
	{
		parent::__construct();
		//$this->load->model('admin');
		$this->load->library('session');
		$this->load->model('catatan');
	}
	function pemasukan()
	{
		$detail=$this->input->post('penjelasan');
		$jumlah=$this->input->post('jumlah');
		$tanggal=Date('Y-m-d');
		$keterangan=$this->input->post('detail');
		$data = array('ID_CATAT' => '','ID_USER'=>$this->session->userdata('id'),
					'JUMLAH'=>$jumlah,'FLAG'=>0, 'TANGGAL'=>$tanggal,'DETAIL'=>$detail,
					 'KETERANGAN'=>$keterangan);
		//print_r($data);
		$this->catatan->inputpemasukan($data);
		redirect('page');
	}
	function pengeluaran()
	{
		$detail=$this->input->post('penjelasan');
		$jumlah=$this->input->post('jumlah');
		$tanggal=Date('Y-m-d');
		$keterangan=$this->input->post('detail');
		$flag=$this->input->post('kategori');
		$data = array('ID_CATAT' => '','ID_USER'=>$this->session->userdata('id'),
					'JUMLAH'=>$jumlah,'FLAG'=>$flag, 'TANGGAL'=>$tanggal,'DETAIL'=>$detail,
					 'KETERANGAN'=>$keterangan);
		//print_r($data);
		$this->catatan->inputpengeluaran($data);
		redirect('page');
	}

}