<?php

class Login extends CI_Controller
{
	function Login()
	{
		parent::__construct();
		//$this->load->model('admin');
		$this->load->library('session');
		$this->load->model('user');
	}
	function index()
	{
		$this->load->view('login');
	}
	function masuk()
	{
		$name=$this->input->post('name');
		$password=$this->input->post('password');
		$a=$this->user->check($name, $password);
		$id=$a[0]['ID_USER'];
		if (!is_null($a[0]['ID_USER']))
		{
			$data= array ('user'=> $name, 'id'=>$id,'nama'=>$a[0]['USERNAME']);
			$this->session->set_userdata($data);
			print_r($data);
			redirect('page');
		}
		else
		{
			redirect('login');
		}
	}
	function logout()
	{
		$this->session->unset_userdata('user_id');
		$this->session->sess_destroy();
		redirect('login');
	}
	function register()
	{
		$name=$this->input->post('username');
		$password=$this->input->post('password');
		$mail=$this->input->post('mail');
		$data = array('ID_USER' => '', 'PASSWORD'=>$password,'USERNAME'=>$name,'email'=>$mail );
		$flagdaftar=$this->user->register($data);
		if ($flagdaftar==1)
		{
			echo "<script>alert('Pendaftaran berhasil');
			window.location.href='login';
			</script>";
		}

		else
		{
			echo "<script>alert('Pendaftaran gagal');
			window.location.href='login';
			</script>";
		}
		$this->load->view('login');
	}
}