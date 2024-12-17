<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ror extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('User_Model'); // Pastikan Anda sudah membuat model ini
        $this->load->library('form_validation');
    }


    public function register() {
            $data = array(
                'username' => $this->input->post('username'),
                'nama' => $this->input->post('name'),
                'password' => $this->input->post('password')
            );

            
            if ($this->db->insert('user', $data)) {
                $this->session->set_flashdata('success', 'Registrasi berhasil!');
                redirect('/ror');
            } else {
                $this->session->set_flashdata('error', 'Registrasi gagal, silakan coba lagi.');
                redirect('ror/registerpage');
            };
        }
    
    function RegisterPage() {
        $this->load->view('registerpage'); 
    }
	function index(){
        $this->load->view('login');
	}
    function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->db->from('user');
        $this->db->where('username',$username);
        $cek = $this->db->get()->row();
        if($cek==NULL){
            $this->session->set_flashdata('alert', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fa fa-exclamation-circle me-2"></i>Username tidak ada
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
            redirect ('Ror');
        }else if($password==$cek->password){
            $data = array(
                'id_user' => $cek->id_user,
                'nama' => $cek->nama,
                'username' => $cek->username,
                'level' => $cek->level
            );
            $this->session->set_userdata($data);
            redirect('admin/home');
        }else {
            $this->session->set_flashdata('alert', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fa fa-exclamation-circle me-2"></i>Password salah
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
            redirect ('Ror');
        }
    }
    function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }
    


}