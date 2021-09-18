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
    
    public function edit($nisn)
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $data['title'] = "Ubah Siswa";
            $data['siswa'] = $this->model('SiswaModel')->getSiswaByNISN(base64_decode($nisn));
            $data['kelas'] = $this->model('KelasModel')->getKelas();
            $data['spp'] = $this->model('SppModel')->getSpp();
            $this->view('siswa/edit', $data);
        }
    }
    
    public function tambah()
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $this->model('SiswaModel')->tambahSiswa($_POST);
            header('Location: ' . BASEURL . 'SiswaController');
            exit;
        }
    }

    public function ubahData()
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $this->model('SiswaModel')->ubahSiswa($_POST);
            header('Location: ' . BASEURL . 'SiswaController');
            exit;
        }
    }
    
    public function hapus($id_pembayaran)
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $this->model('SiswaModel')->hapusSiswa(base64_decode($id_pembayaran));
            header('Location: ' . BASEURL . 'SiswaController');
            exit;
        }
    }
}
