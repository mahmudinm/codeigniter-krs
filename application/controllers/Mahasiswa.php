<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_mahasiswa');
    }

    public function index()
    {
        $mahasiswa['mahasiswas'] = $this->m_mahasiswa->all();
        $this->template->build('mahasiswa/index', $mahasiswa);
    }

    public function create()
    {
        $this->template->build('mahasiswa/create');
    }

    public function store()
    {
        $data['nim'] = $this->input->post('nim');
        $data['nama'] = $this->input->post('nama');
        $data['semester'] = $this->input->post('semester');
        $data['ipk'] = $this->input->post('ipk');
        $data['fakultas'] = $this->input->post('fakultas');
        $data['jurusan'] = $this->input->post('jurusan');

        $this->form_validation->set_rules('nim', 'Nim', 'trim|max_length[20]|numeric|is_unique[mahasiswa.nim]|required');
        $this->form_validation->set_rules('nama', 'Nama', 'trim|max_length[50]|required');
        $this->form_validation->set_rules('semester', 'Semester', 'trim|numeric|required');
        $this->form_validation->set_rules('ipk', 'IPK', 'trim|numeric|max_length[50]|required');
        $this->form_validation->set_rules('fakultas', 'Fakultas', 'trim|required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->build('mahasiswa/create'); 
        } else {
            $this->m_mahasiswa->create($data);
            return redirect('mahasiswa');
        }

    }

    public function edit($nim)
    {
        $data['mahasiswa'] = $this->m_mahasiswa->find($nim);
        $this->template->build('mahasiswa/edit', $data);
    }

    public function update()
    {
        $nim_hide = $this->input->post('nim_hide');

        $data['nim'] = $this->input->post('nim');
        $data['nama'] = $this->input->post('nama');
        $data['semester'] = $this->input->post('semester');
        $data['ipk'] = $this->input->post('ipk');
        $data['fakultas'] = $this->input->post('fakultas');
        $data['jurusan'] = $this->input->post('jurusan');

        $this->form_validation->set_rules('nim', 'Nim', 'trim|max_length[20]|numeric|required');
        $this->form_validation->set_rules('nama', 'Nama', 'trim|max_length[50]|required');
        $this->form_validation->set_rules('semester', 'Semester', 'trim|numeric|required');
        $this->form_validation->set_rules('ipk', 'IPK', 'trim|numeric|max_length[50]|required');
        $this->form_validation->set_rules('fakultas', 'Fakultas', 'trim|required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data['mahasiswa'] = $this->m_mahasiswa->find($nim_hide);
            $this->template->build('mahasiswa/edit', $data); 
        } else {
            $this->m_mahasiswa->update($data, $nim_hide);
            return redirect('mahasiswa');
        }        
    }

    public function delete($nim)
    {
        $this->m_mahasiswa->delete($nim);
        redirect('mahasiswa');   
    }

}
