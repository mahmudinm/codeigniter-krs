<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Krs extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['m_krs','m_matakuliah', 'm_mahasiswa']);
    }

    public function index()
    {
        $krs['krss'] = $this->m_krs->all();
        $this->template->build('krs/index', $krs);
    }

    public function create()
    {
        $data['matakuliahsm'] = $this->m_matakuliah->semester();
        $data['mahasiswas'] = $this->m_mahasiswa->nama();
        $this->template->build('krs/create', $data);
    }

    public function store()
    {
        
        $data['mahasiswa'] = $this->input->post('mahasiswa');
        $data['matakuliah'] = implode(',', $this->input->post('matakuliah[]'));
        $data['jurusan'] = $this->input->post('jurusan');

        $this->form_validation->set_rules('mahasiswa', 'Mahasiswa', 'trim|max_length[50]|required');
        // $this->form_validation->set_rules('matakuliah', 'Matakuliah', 'trim|required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data['matakuliahsm'] = $this->m_matakuliah->semester();
            $data['mahasiswas'] = $this->m_mahasiswa->nama();
            $this->template->build('krs/create', $data); 
        } else {
            $this->m_krs->create($data);
            return redirect('krs');
        }

    }

    public function edit($id)
    {
        $data['krs'] = $this->m_krs->find($id);
        $this->template->build('krs/edit', $data);
    }

    public function update()
    {
        $nim_hide = $this->input->post('nim_hide');

        $data['id'] = $this->input->post('id');
        $data['nama'] = $this->input->post('nama');
        $data['fakultas'] = $this->input->post('fakultas');
        $data['jurusan'] = $this->input->post('jurusan');

        $this->form_validation->set_rules('id', 'id', 'trim|max_length[20]|numeric|required');
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

    public function delete($id)
    {
        $this->m_krs->delete($id);
        redirect('krs');   
    }

}
