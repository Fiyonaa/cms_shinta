<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('User_Model');
        // if($this->session->userdata('level')<>'admin'){
        //     redirect('Ror');
        // }
    }
	public function index(){
        $this->db->from('user');
        $this->db->order_by('nama', 'ASC');
        $user = $this->db->get()->result_array();  
        $data = array(
            'judul_halaman' => 'Data Pengguna',
            'user'          => $user
        );
		$this->template->load('templateAdmin', 'admin/user_index',$data);
	}

    function simpan(){
        $this->db->from('user');
        $this->db->where('username',$this->input->post('username'));
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
            $this->session->set_flashdata('alert', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fa fa-exclamation-circle me-2"></i>Username sudah ada
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
            redirect ('admin/user');
        }
        $this->User_Model->simpan();
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>aaaaaaaaaaaa, udah kesimpan tauuu
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect ('admin/user');
    }
    function delete($id){
        $where = array(
            'id_user'   => $id
        );
        $this->db->delete('user',$where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>aaaaaaaaaaaa, udah kehapus tauuu
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect ('admin/user');
    }
    function update(){
        $this->User_Model->update();
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>aaaaaaaaaaaa, udah keupdate tauuu
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect ('admin/user');
    }
}
