<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function index()
    {
        $this->template->build('mahasiswa/index');
    }
}
