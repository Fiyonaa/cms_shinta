<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kategori extends CI_Controller {
    public function __construct(){
        parent::__construct();
        // if($this->session->userdata('level')==NULL){
        //     redirect('Ror');
        // }
    }
	public function index(){
        $this->db->from('kategori');
        $this->db->order_by('nama_kategori', 'ASC');
        $kategori = $this->db->get()->result_array();  
        $data = array(
            'judul_halaman' => 'Kategori Konten',
            'kategori'      => $kategori
        );
		$this->template->load('templateAdmin', 'admin/kategori_index',$data);
	}

    function simpan(){
        $this->db->from('kategori');
        $this->db->where('nama_kategori',$this->input->post('nama_kategori'));
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
            $this->session->set_flashdata('alert', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fa fa-exclamation-circle me-2"></i>Kategori Konten Sudah Digunakan
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
            redirect ('admin/kategori');
        }
        $data = array(
            'nama_kategori'     => $this->input->post('nama_kategori')
        );
        $this->db->insert('kategori',$data);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>Berhasil Menambah Kategori RARRRRR
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect ('admin/kategori');
    }
    function delete($id){
        $where = array(
            'id_kategori'   => $id
        );
        $this->db->delete('kategori',$where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>aaaaaaaaaaaa, udah kehapus tauuu
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect ('admin/kategori');
    }
    function update(){
        $where = array(
            'id_kategori'   => $this->input->post('id_kategori')
        );
        $data = array(
            'nama_kategori'      => $this->input->post('nama_kategori')
        );
        $this->db->update('kategori',$data,$where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>aaaaaaaaaaaa, udah keupdate tauuu
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect ('admin/kategori');
    }
}
