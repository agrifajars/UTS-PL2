<?php

class SiswaController extends Controller
{
    public function index()
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $data['title'] = 'Siswa';
            $data['siswa'] = $this->model('SiswaModel')->getSiswa();
            $this->view('siswa/index', $data);
        }
    }

    public function add()
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $data['title'] = 'Tambah Siswa';
            $data['kelas'] = $this->model('KelasModel')->getKelas();
            $data['spp'] = $this->model('SppModel')->getSpp();
            $this->view('siswa/add', $data);
        }
    }

    
    public function tambah()
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            if ($this->model('SiswaModel')->tambahSiswa($_POST) > 0) {
                header('Location: ' . BASEURL . 'SiswaController');
                exit;
            } else {
                header('Location: ' . BASEURL . 'SiswaController');
                exit;
            }
        }
    }
}
