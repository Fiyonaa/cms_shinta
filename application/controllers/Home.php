<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
	public function index(){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();

        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();

        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('tanggal', 'DESC');
        $konten = $this->db->get()->result_array(); 

        $data = array(
            'judul'     => "Beranda | Tata",
            'konfig'    => $konfig,
            'kategori'  => $kategori,
            'caraousel'  => $caraousel,
            'konten'  => $konten
        );
        $this->load->view('beranda',$data);
	}
    public function kategori($id){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();

        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();

        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->where('a.id_kategori',$id);
        $konten = $this->db->get()->result_array(); 

        $this->db->from('kategori');
        $nama_kategori = $this->db->get()->row()->nama_kategori;
        $this->db->where('id_kategori',$id);

        $data = array(
            'judul'     => $nama_kategori." | Tata",
            'nama_kategori' => $nama_kategori,
            'konfig'    => $konfig,
            'kategori'  => $kategori,
            'konten'  => $konten
        );
        $this->load->view('kategori',$data);
	}
    function artikel($id){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();

        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        

        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->where('slug',$id);
        $konten = $this->db->get()->row(); 
        // var_dump($konten);
        // die();
        $data = array(
            'judul'     => $konten->judul." | Tata",
            'konfig'    => $konfig,
            'kategori'  => $kategori,
            'konten'  => $konten
        );
        $this->load->view('detail',$data);
        // var_dump($konten);
        // die();
    }

    public function galeri(){
        $this->db->from('galeri');
        $galeri = $this->db->get()->result_array();

        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();

        $data = array(
            'judul' => "Galeri | Tata",
            'konfig' => $konfig,
            'kategori' => $kategori,
            'galeri' => $galeri
        );
        $this->load->view('galeri', $data);
    }

    public function registrasi(){
        var_dump('p');
        // $this->db->from('user');
        // $this->db->where('username',$this->input->post('username'));
        // $cek = $this->db->get()->result_array();
        // if($cek<>NULL){
        //     $this->session->set_flashdata('alert', '
        //     <div class="alert alert-success alert-dismissible fade show" role="alert">
        //         <i class="fa fa-exclamation-circle me-2"></i>Username sudah ada
        //         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        //     </div>
        //     ');
        //     redirect ('admin/user');
        // }
        // $this->User_Model->simpan();
        // $this->session->set_flashdata('alert', '
        // <div class="alert alert-success alert-dismissible fade show" role="alert">
        //     <i class="fa fa-exclamation-circle me-2"></i>aaaaaaaaaaaa, udah kesimpan tauuu
        //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        // </div>
        // ');
        redirect ('ror');
    }

}
