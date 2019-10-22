<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemain extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('MPemain');
	}
	
	public function index()
	{
		$this->load->view('vhome');
	}

	public function tampil(){
		
		$data['dat'] = $this->MPemain->tampil_pemain();
		$this->load->view('vpemain',$data);
	}

	public function tambah_data(){
		$this->load->view('vtambah_data');
	}

	public function tambah_data_action(){
		$insert = array(
			'id_pemain' => $this->input->post("id_pemain"),
			'nama_pemain' => $this->input->post("nama_pemain"),
			'asal_negara_pemain' => $this->input->post("asal_negara_pemain"),
		);
		$this->MPemain->tambah_data($insert);
		redirect('Pemain/tampil');
	}

	public function delete_data($id){
		$this->MPemain->delete_data($id);
		redirect('Pemain/tampil');

	}
	public function edit_data($id){
		$data['dat'] = $this->MPemain->tampil_pemain_satuan($id);
		$this->load->view('vedit', $data);
	}

	public function edit_data_action() {
		$update = array(
			'id_pemain' => $this->input->post("id_pemain"),
			'nama_pemain' => $this->input->post("nama_pemain"),
			'asal_negara_pemain' => $this->input->post("asal_negara_pemain"),
		);
		$this->MPemain->edit_data($update);
		redirect('Pemain/tampil');

	}
}
