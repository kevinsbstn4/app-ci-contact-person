<?php 

class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
                $this->load->helper('url');
	}

	function index(){
		$data['cp'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}

	function tambah(){
		$this->load->view('v_input');
	}
 
	function tambah_aksi(){
		$id_customer = $this->input->post('id_customer');
		$nm_cp = $this->input->post('nm_cp');
		$jabatan = $this->input->post('jabatan');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
 
		$data = array(
			'id_customer' => $id_customer,
			'nm_cp' => $nm_cp,
			'jabatan' => $jabatan,
			'email' => $email,
			'no_hp' => $no_hp,
			);
		$this->m_data->input_data($data,'cp');
		redirect('crud/index');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'cp');
		redirect('crud/index');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['cp'] = $this->m_data->edit_data($where,'cp')->result();
		$this->load->view('v_edit',$data);
	}
	function update(){
		$id = $this->input->post('id');
		$id_customer = $this->input->post('id_customer');
		$nm_cp = $this->input->post('nm_cp');
		$jabatan = $this->input->post('jabatan');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');

	 
		$data = array(
			'id_customer' => $id_customer,
			'nm_cp' => $nm_cp,
			'jabatan' => $jabatan,
			'email' => $email,
			'no_hp'   => $no_hp
		);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->m_data->update_data($where,$data,'cp');
		redirect('crud/index');
	}

}