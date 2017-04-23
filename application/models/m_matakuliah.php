<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Matakuliah extends CI_Model {

    function __construct() {
        parent::__construct();
    }


    public function all(){
        return $this->db
                    ->get('matakuliah')
                    ->result();
    }

    public function create($data){
        return $this->db
                     ->insert('matakuliah', $data);
    }


    public function find($id){
        $sql = "SELECT * FROM matakuliah WHERE id = ? ";
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
                     ->update('matakuliah', $data);
    }

    public function delete($id){
        return $this->db
                     ->where('id',$id)
                     ->delete('matakuliah');
    }


    public function nama($semester)
    {
        return $this->db
                    ->where('semester', $semester)
                    ->select('nama, sks')
                    ->get('matakuliah')
                    ->result();
    }

    public function semester()
    {
        return $this->db
                    ->select('semester')
                    ->order_by('semester')
                    ->group_by('semester')
                    ->get('matakuliah')
                    ->result();
    }

}
