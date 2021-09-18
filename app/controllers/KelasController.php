<?php

class KelasController extends Controller
{
    public function index()
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $data['title'] = 'Kelas';
            $data['kelas'] = $this->model('KelasModel')->getKelas();
            $this->view('kelas/index', $data);
        }
    }


    public function add()
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $data['title'] = 'Tambah Kelas';
            $this->view('kelas/add', $data);
        }
    }

    public function edit($id_kelas)
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $data['title'] = 'Ubah Kelas';
            $data['kelas'] = $this->model('KelasModel')->getKelasById(base64_decode($id_kelas));
            $this->view('kelas/edit', $data);
        }
    }

    public function tambah()
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            if ($this->model('KelasModel')->tambahKelas($_POST)) {
                header('Location: ' . BASEURL . 'KelasController');
                exit;
            } else {
                header('Location: ' . BASEURL . 'KelasController');
                exit;
            }
        }
    }

    public function hapus($id_kelas)
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            if ($this->model('KelasModel')->hapusKelas(base64_decode($id_kelas)) > 0) {
                header('Location: ' . BASEURL . 'KelasController');
                exit;
            } else {
                header('Location: ' . BASEURL . 'KelasController');
                exit;
            }
        }
    }

    public function ubahData()
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            if ($this->model('KelasModel')->ubahKelas($_POST) > 0) {
                header('Location: ' . BASEURL . 'KelasController');
                exit;
            } else {
                header('Location: ' . BASEURL . 'KelasController');
                exit;
            }
        }
    }
}
