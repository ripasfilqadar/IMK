<?php
class User extends CI_Model
{
	function User()
	{
		parent::__construct();
	}
	function check($id,$password)
	{
		$query="select * from user where USERNAME='$id' and PASSWORD='$password'";
		$query=$this->db->query($query);
		return $query->result_array();
	}
	function register($data)
	{
		try {
		$this->db->insert('user',$data);
		return 1;
		} 
		catch (Exception $e) {
			return 0;
		}
	}
}