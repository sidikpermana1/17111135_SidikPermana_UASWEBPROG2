<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DasborMahasiswa extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('modeladmin');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("/login"));
		} 
	}

	public function index(){	
		$data['title'] = "Mahasiswa ";
		$data['mhs'] = $this->modeladmin->mahasiswa($this->session->userdata('npm'));
		// var_dump($this->session->userdata('npm'));
		// exit();
		$this->load->view('header/headadm', $data);
		$this->load->view('profile',$data);
		$this->load->view('footer/footadm');		
	}
	

	public function editProfile(){
		$data['title'] = "Ubah Data";
		$data['mhs'] = $this->modeladmin->mahasiswa($this->session->userdata('npm'));	
		$this->load->view('header/headadm', $data);
		$this->load->view('profileEdit', $data);
		$this->load->view('footer/footadm');		
	}
	public function updateProfile(){
		
		$this->modeladmin->update(['npm' => $this->session->userdata('npm')],['alamat' => $this->input->post('alamat'),'no_telepon' => $this->input->post('no_telepon'),'email' => $this->input->post('email'),'agama' => $this->input->post('agama')],'data_mahasiswa');
		echo "<script>alert('Data berhasil diubah');window.location.href = '".base_url('\DasborMahasiswa')."';</script>";
	}
}
