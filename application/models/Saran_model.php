<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saran_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    public function get_all_saran() {
        $query = $this->db->get('saran'); 
        return $query->result();
    }
    public function insert_saran($data) {
        return $this->db->insert('saran', $data); 
    }
    public function update_saran($id, $data) {
        $this->db->where('id', $id); 
        return $this->db->update('saran', $data); 
    }
    public function delete_saran($id) {
        $this->db->where('id', $id); 
        return $this->db->delete('saran');
    }
}
?>