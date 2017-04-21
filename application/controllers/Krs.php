<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Krs extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_krs');
    }

    public function index()
    {
        $krs['krss'] = $this->m_krs->all();
        $this->template->build('krs/index', $krs);
    }

    public function create()
    {
        $this->template->build('krs/create');
    }

    public function store()
    {
        $data['nama'] = $this->input->post('nama');
        $data['fakultas'] = $this->input->post('fakultas');
        $data['jurusan'] = $this->input->post('jurusan');

        $this->form_validation->set_rules('nama', 'Nama', 'trim|max_length[50]|required');
        $this->form_validation->set_rules('fakultas', 'Fakultas', 'trim|required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->build('krs/create'); 
        } else {
            $this->m_krs->create($data);
            return redirect('krs');
        }

    }

    public function edit($nim)
    {
        $data['krs'] = $this->m_krs->find($nim);
        $this->template->build('krs/edit', $data);
    }

    public function update()
    {
        $nim_hide = $this->input->post('nim_hide');

        $data['nim'] = $this->input->post('nim');
        $data['nama'] = $this->input->post('nama');
        $data['fakultas'] = $this->input->post('fakultas');
        $data['jurusan'] = $this->input->post('jurusan');

        $this->form_validation->set_rules('nim', 'Nim', 'trim|max_length[20]|numeric|required');
        $this->form_validation->set_rules('nama', 'Nama', 'trim|max_length[50]|required');
        $this->form_validation->set_rules('fakultas', 'Fakultas', 'trim|required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            // $data['krs'] = $this->m_krs->find($nim_hide);
            $this->template->build('krs/edit', $data); 
            
        } else {
            $this->m_krs->update($data, $nim_hide);
            return redirect('krs');
        }        
    }

    public function delete($nim)
    {
        $this->m_krs->delete($nim);
        redirect('krs');   
    }

}
