<?php

class MPemain extends CI_Model{

	public function tampil_pemain(){
		$query = $this->db->get("pemain_bola");
		return $query->result();
	}

	public function tampil_pemain_satuan($id) {
		$query = $this->db->get_where("pemain_bola", array('id_pemain'=>$id));
		return $query->row();
	}

	public function tambah_data($data){
		$this->db->insert("pemain_bola",$data);
	}

	public function delete_data($id){
		$this->db->where("id_pemain", $id);
		$this->db->delete("pemain_bola");
	}

	public function edit_data($data) {
		$this->db->where('id_pemain', $data['id_pemain']);
		$this->db->update('pemain_bola', $data);
	}
}
