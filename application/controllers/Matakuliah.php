<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_matakuliah');
    }

    public function index()
    {
        $matakuliah['matakuliahs'] = $this->m_matakuliah->all();
        $this->template->build('matakuliah/index', $matakuliah);
    }

    public function create()
    {
        $this->template->build('matakuliah/create');
    }

    public function store()
    {
        $data['nama'] = $this->input->post('nama');
        $data['semester'] = $this->input->post('semester');        
        $data['sks'] = $this->input->post('sks');        
        $data['fakultas'] = $this->input->post('fakultas');
        $data['jurusan'] = $this->input->post('jurusan');

        $this->form_validation->set_rules('nama', 'Nama', 'trim|max_length[50]|is_unique[matakuliah.nama]|required');
        $this->form_validation->set_rules('semester', 'Semester', 'trim|numeric|required');
        $this->form_validation->set_rules('sks', 'SKS', 'trim|numeric|required');
        $this->form_validation->set_rules('fakultas', 'Fakultas', 'trim|required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->build('matakuliah/create'); 
        } else {
            $this->m_matakuliah->create($data);
            return redirect('matakuliah');
        }


    }

    public function edit($id)
    {
        $data['matakuliah'] = $this->m_matakuliah->find($id);
        $this->template->build('matakuliah/edit', $data);
    }

    public function update()
    {
        $id_hide = $this->input->post('id_hide');

        $data['nama'] = $this->input->post('nama');
        $data['semester'] = $this->input->post('semester');
        $data['sks'] = $this->input->post('sks');        
        $data['fakultas'] = $this->input->post('fakultas');
        $data['jurusan'] = $this->input->post('jurusan');

        $this->form_validation->set_rules('nama', 'Nama', 'trim|max_length[50]|required');
        $this->form_validation->set_rules('semester', 'Semester', 'trim|numeric|required');
        $this->form_validation->set_rules('sks', 'SKS', 'trim|numeric|required');
        $this->form_validation->set_rules('fakultas', 'Fakultas', 'trim|required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data['matakuliah'] = $this->m_matakuliah->find($id_hide);
            $this->template->build('matakuliah/edit', $data);
        } else {
            $this->m_matakuliah->update($data, $id_hide);
            return redirect('matakuliah');
        }        
    }

    public function delete($id)
    {
        $this->m_matakuliah->delete($id);
        redirect('matakuliah');   
    }

}
