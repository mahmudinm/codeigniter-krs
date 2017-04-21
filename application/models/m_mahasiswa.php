<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Mahasiswa extends CI_Model {

    function __construct() {
        parent::__construct();
    }


    public function all(){
        return $this->db
                    ->get('mahasiswa')
                    ->result();
    }

    public function create($data){
        return $this->db
                     ->insert('mahasiswa', $data);
    }


    public function find($nim){
        $sql = "SELECT * FROM mahasiswa WHERE nim = ? ";
        $query = $this->db->query($sql, $nim);
        if ($query->num_rows() > 0) {
          $result = $query->row_array();
            return $result;
        } else {
            return array();
        }
    }


    public function update($data, $nim){
        return $this->db
                     ->where('nim',$nim)
                     ->update('mahasiswa', $data);
    }

    // public function deleteStudent($id){
    //     return $this -> db
    //                  -> where('ID',$id)
    //                  -> delete('ogrenci');
    // }



    // public function rowControl($attr,$data){
    //     return $this -> db
    //                  -> where($attr,$data)
    //                  -> get('ogrenci')
    //                  -> result();
    // }
    
}
