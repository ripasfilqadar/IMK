<?php
class Catatan extends CI_Model
{
	function Catatan()
	{
		parent::__construct();
	}
	function inputpemasukan($data)
	{
		$this->db->insert('catatan',$data);
	}
	function getpemasukan($id)
	{
		$date=date('Y-m');
		$sql="select sum(JUMLAH) as jumlah from catatan where ID_USER='$id' and TANGGAL like ('$date%') and flag=0";
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	function detailpemasukan($id)
	{
		$date=date('Y-m');
		$sql="select * from catatan where ID_USER='$id' and TANGGAL like ('$date%') and flag=0";
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	function inputpengeluaran($data)
	{
		$this->db->insert('catatan',$data);
	}
	function detailpengeluaran($id, $flag)
	{
		$date=date('Y-m');
		$sql="select * from catatan where ID_USER='$id' and TANGGAL like ('$date%') and flag=$flag";
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	function getpengeluaranlain($id)
	{
		$tanggal=date('Y-m');
		$sql="SELECT SUM(JUMLAH) AS jumlah,flag FROM catatan WHERE FLAG=4 and ID_USER='$id'";
		$query=$this->db->query($sql);
		return $query->result_array();
	}
		function getpengeluaranmakan($id)
	{
		$tanggal=date('Y-m');
		$sql="SELECT SUM(JUMLAH) AS jumlah,flag FROM catatan WHERE FLAG=2 and ID_USER='$id'";
		$query=$this->db->query($sql);
		return $query->result_array();
	}
		function getpengeluarantransportasi($id)
	{
		$tanggal=date('Y-m');
		$sql="SELECT SUM(JUMLAH) AS jumlah,flag FROM catatan WHERE FLAG=1 and ID_USER='$id'";
		$query=$this->db->query($sql);
		return $query->result_array();
	}
		function getpengeluaranhiburan($id)
	{
		$tanggal=date('Y-m');
		$sql="SELECT SUM(JUMLAH) AS jumlah,flag FROM catatan WHERE FLAG=3 and ID_USER='$id'";
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	function totalpengeluaran($id)
	{
		$tanggal=date('Y-m');
		$sql="SELECT sum(JUMLAH) as jumlah from catatan where ID_USER=$id and tanggal like ('$tanggal%')";
		$query=$this->db->query($sql);
		return $query->result_array();
	}
}