<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_data(){
        $sql = "SELECT id_kar, nama_kar, no_hp, email, alamat, jenis_kel FROM karyawan";
        $query = $this->db->query($sql);
        
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    function insert($params =''){
        $sql = "INSERT INTO karyawan (nama_kar, no_hp, email, alamat, jenis_kel) VALUES (?, ?, ?, ?, ?)";
        return $this->db->query($sql, $params);
    } 
    
    function edit($params){
        $sql = "SELECT * FROM karyawan WHERE id_kar = ? ";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
          $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    function update($params){
        $sql = "UPDATE karyawan SET nama_kar = ?, no_hp = ?, email = ?, alamat = ?, jenis_kel = ? WHERE id_kar = ?";
        return $this->db->query($sql, $params);
    }    
    
}
