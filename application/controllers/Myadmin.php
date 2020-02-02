<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myadmin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('modeladmin');
		
		if($this->session->userdata('status') != "login"){
			return redirect(base_url("/login"));
		} 
	}

	public function index(){	
		$data['title'] = "Admin Website | Oxford ";
		$this->load->view('header/headadm', $data);
		$this->load->view('dashboard');
		$this->load->view('footer/footadm');		
	}
	

	public function tambahdata(){
		$data['title'] = "Create Data | Oxford ";
		$data['user'] = $this->modeladmin->tampil();		
		$this->load->view('header/headadm', $data);
		$this->load->view('tambahdata', $data);
		$this->load->view('footer/footadm');		
	}

	function editdata($id=null){
		if(is_null($id)){		
			$this->session->set_flashdata('message', 'You Lost!');
			redirect('Myadmin/tambahdata');
		}else{
			$data['title'] = "Edit Data | Oxford";
			$where = array('id' => $id);			
			$data['user'] = $this->modeladmin->edit($where,'data_mahasiswa')->result();
			$this->load->view('header/headadm', $data);
			$this->load->view('editdata',$data);
			$this->load->view('footer/footadm');
		}
		
		
		//percobaan error handling page 404.


		// foreach ($a as $id) {			
		// 	$where = array('id' => $id);	

		// 	$b = $this->modeladmin->edit($where,'data_mahasiswa')->get()->row();
		// 	$exist = $this->modeladmin->edit($where,'data_mahasiswa')->result();

		// 	if($a > 0){
		// 		$data['user']= $this->db->get()->result();
		// 		$this->load->view('header/headadm', $data);
		// 		$this->load->view('editdata', $data);
		// 		$this->load->view('footer/footadm');
		// 	}
		// 	if($a < 0){
		// 		$this->load->view('header/headadm', $data);
		// 		$this->load->view('error');
		// 		$this->load->view('footer/footadm');
		// 	}
		// }
			
	}

	function f_editdata(){
		$id = $this->input->post('id');
		$npm = $this->input->post('npm');
		$nama = $this->input->post('nama');
		$semester = $this->input->post('semester');
	 
		$data = array(
			'npm' => $npm,
			'nama' => $nama,
			'semester' => $semester
		);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->modeladmin->update($where,$data,'data_mahasiswa');
		redirect('Myadmin/tambahdata');
	}

	function hapusdata($id){
		$where = array('id' => $id);
		$this->modeladmin->hapus($where, 'data_mahasiswa');
		redirect('Myadmin/tambahdata');
	}

	function f_tambahdata(){
		$npm = $this->input->post('npm');
		$nama = $this->input->post('nama');
		$semester = $this->input->post('semester');
		$data = array(
			'npm' => $npm,
			'nama' => $nama,
			'semester' => $semester);		
		$this->modeladmin->tambah('data_mahasiswa', $data);
		redirect('Myadmin/tambahdata');
	}
}
