<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Krs extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['m_krs', 'm_matakuliah', 'm_mahasiswa']);
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
        $data['sks'] = $this->input->post('sks');

        $this->form_validation->set_rules('mahasiswa', 'Mahasiswa', 'trim|max_length[50]|required');
        $this->form_validation->set_rules('matakuliah[]', 'Matakuliah', 'trim|required');
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
        $data['matakuliahsm'] = $this->m_matakuliah->semester();
        $data['mahasiswas'] = $this->m_mahasiswa->nama();
        $data['krs'] = $this->m_krs->find($id);
        $this->template->build('krs/edit', $data);
    }

    public function update()
    {
        $id_hide = $this->input->post('id_hide');

        $data['mahasiswa'] = $this->input->post('mahasiswa');
        if (null !== $this->input->post('matakuliah[]')) {
            $data['matakuliah'] = implode(',', $this->input->post('matakuliah[]'));
        }
        $data['jurusan'] = $this->input->post('jurusan');
        $data['sks'] = $this->input->post('sks');

        $this->form_validation->set_rules('mahasiswa', 'Mahasiswa', 'trim|max_length[50]|required');
        $this->form_validation->set_rules('matakuliah[]', 'Matakuliah', 'trim|required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required');


        if ($this->form_validation->run() == FALSE) {
            $data['matakuliahsm'] = $this->m_matakuliah->semester();
            $data['mahasiswas'] = $this->m_mahasiswa->nama();
            $data['krs'] = $this->m_krs->find($id_hide);
            $this->template->build('krs/edit', $data); 
            
        } else {
            $this->m_krs->update($data, $id_hide);
            return redirect('krs');
        }        
    }

    public function delete($id)
    {
        $this->m_krs->delete($id);
        redirect('krs');   
    }

}
