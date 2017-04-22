<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Krs extends CI_Model {

    function __construct() {
        parent::__construct();
    }


    public function all(){
        return $this->db
                    ->get('krs')
                    ->result();
    }

    public function create($data){
        return $this->db
                     ->insert('krs', $data);
    }


    public function find($id){
        $sql = "SELECT * FROM krs WHERE id = ? ";
        $query = $this->db->query($sql, $id);
        if ($query->num_rows() > 0) {
          $result = $query->row_array();
            return $result;
        } else {
            return array();
        }
    }


    public function update($data, $id){
        return $this->db
                     ->where('id',$id)
                     ->update('krs', $data);
    }

    public function delete($id){
        return $this->db
                     ->where('id',$id)
                     ->delete('krs');
    }

}
