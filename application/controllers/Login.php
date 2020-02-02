<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('m_login');
		
	}

	function index(){
		if($this->session->userdata('status') == "login"){
			if($this->session->userdata('level') == 1){
				redirect(base_url("DasborMahasiswa"));
 			} elseif($this->session->userdata('level') == 2){
				redirect(base_url("Myadmin"));
			}
		} else{
			$data['title'] = "Login Website | Oxford ";
			$this->load->view('header/headlog', $data);
			$this->load->view('login');
			$this->load->view('footer/footlog');
		}
	}

	function f_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => sha1($password)
			);
		$cek = $this->m_login->cek_login("login", $where)->num_rows();
		if($cek == 1){
 			$get_data = $this->m_login->cek_login("login", $where)->row();
			$data_session = array(
				'nama' => $username,
				'status' => "login",
				'level' => $get_data->level,
				'npm' => $get_data->npm,
				);
 
			$this->session->set_userdata($data_session);
 			if($get_data->level == 1){
				redirect(base_url("DasborMahasiswa"));
 			} elseif($get_data->level == 2){
				redirect(base_url("Myadmin"));
			} else{
				redirect('Login/logout');
			}
 
		}else{
			echo "<script>alert('Username/Password salah');window.location.href = '".base_url('\Login')."';</script>";
		}
	}
	

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Login'));
	}
}
