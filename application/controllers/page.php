<?php

class Page extends CI_Controller
{
	function Page()
	{
		parent::__construct();
		//$this->load->model('admin');
		$this->load->library('session');
		$this->load->model('catatan');
	}
	function index()
	{
		$data['pemasukan']=$this->catatan->getpemasukan($this->session->userdata('id'));
		$data['pengeluarantransportasi']=$this->catatan->getpengeluarantransportasi($this->session->userdata('id'));
		$data['pengeluaranhiburan']=$this->catatan->getpengeluaranhiburan($this->session->userdata('id'));
		$data['pengeluaranmakan']=$this->catatan->getpengeluaranmakan($this->session->userdata('id'));
		$data['pengeluaranlain']=$this->catatan->getpengeluaranlain($this->session->userdata('id'));
		$data['totalpengeluaran']=$this->catatan->totalpengeluaran($this->session->userdata('id'));
		
		$this->load->view('index',$data);
	}
	function detailpemasukan()
	{
		$data['detailpemasukan']=$this->catatan->detailpemasukan($this->session->userdata('id'));
		$this->load->view('datadetail',$data);
	}
	function detailpengeluaran($flag)
	{
		$data['detailpengeluaran']=$this->catatan->detailpengeluaran($this->session->userdata('id'),$flag);
		$this->load->view('detailpengeluaran',$data);	
	}
}