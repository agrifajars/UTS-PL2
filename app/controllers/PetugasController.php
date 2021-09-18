<?php

class PetugasController extends Controller
{
    public function index()
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $data['title'] = 'Petugas';
            $data['petugas'] = $this->model('PetugasModel')->getPetugas();
            $this->view('petugas/index', $data);
        }
    }

    public function detail($id_petugas)
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $data['title'] = 'Petugas';
            $data['petugas'] = $this->model('PetugasModel')->getPetugasById(base64_decode($id_petugas));
            $this->view('petugas/detail', $data);
        }
    }

    public function add()
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $data['title'] = 'Tambah Petugas';
            $this->view('petugas/add', $data);
        }
    }

    public function edit($id_petugas)
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $data['title'] = "Ubah Petugas";
            $data['petugas'] = $this->model('PetugasModel')->getPetugasById(base64_decode($id_petugas));
            $this->view('petugas/edit', $data);
        }
    }

    public function tambah()
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            if ($this->model('PetugasModel')->tambahDataPetugas($_POST) > 0) {
                header('Location: ' . BASEURL . 'PetugasController');
                exit;
            } else {
                header('Location: ' . BASEURL . 'PetugasController');
                exit;
            }
        }
    }

    public function hapus($id_petugas)
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $this->model('PetugasModel')->hapusDataPetugas(base64_decode($id_petugas));
            header('Location: ' . BASEURL . 'PetugasController');
            exit;
        }
    }

    public function ubahData()
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $this->model('PetugasModel')->ubahDataPetugas($_POST);
            header('Location: ' . BASEURL . 'PetugasController');
            exit;
        }
    }
}
