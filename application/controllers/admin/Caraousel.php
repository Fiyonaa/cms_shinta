<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Caraousel extends CI_Controller {
    public function __construct(){
        parent::__construct();
        // if($this->session->userdata('level')==NULL){
        //     redirect('Ror');
        // }
    }
	public function index(){
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();  

        $data = array(
            'judul_halaman' => 'Halaman Caraousel',
            'caraousel'      => $caraousel
        );
		$this->template->load('templateAdmin', 'admin/caraousel_index',$data);
	}

    function simpan(){
        $namafoto = date('YmdHis').'.jpg';
        $config['upload_path']      = 'assets/upload/caraousel/';
        $config['max_size']         = 1024 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['file_name']        = $namafoto;
        $config['allowed_types']    = '*';
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 1024 * 1024) {
            $this->session->set_flashdata('alert','
                <div class=" alert alert-danger alert-dismissible" role="alert">
                    Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            ');
            redirect('admin/caraousel');
        } elseif( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        } else{
            $data = array('upload_data' => $this->upload->data());
        }
        
        $data = array(  
            'judul'     => $this->input->post('judul'),
            'foto'     => $namafoto
        );
        $this->db->insert('caraousel',$data);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>Berhasil Menambah Caraousel RARRRRR
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect ('admin/caraousel');
    }
    
    function delete($id){
        $filename=FCPATH.'/assets/upload/caraousel/'.$id;
            if (file_exists($filename)){
                unlink("./assets/upload/caraousel/".$id);
            }

        $where = array(
            'foto'   => $id
        );
        $this->db->delete('caraousel',$where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>aaaaaaaaaaaa, udah kehapus tauuu
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect ('admin/caraousel');
    }
      
}