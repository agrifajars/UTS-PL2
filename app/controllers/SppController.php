<?php

class SppController extends Controller
{
    public function index()
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $data['title'] = 'SPP';
            $data['spp'] = $this->model('SppModel')->getSpp();
            $this->view('spp/index', $data);
        }
    }

    public function add()
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $data['title'] = 'Tambah SPP';
            $this->view('spp/add', $data);
        }
    }

    public function edit($id_spp)
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $data['title'] = 'Ubah SPP';
            $data['spp'] = $this->model('SppModel')->getSppById(base64_decode($id_spp));
            $this->view('spp/edit', $data);
        }
    }

    public function tambah()
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $this->model('SppModel')->tambahDataSpp($_POST);
            header('Location: ' . BASEURL . 'SppController');
            exit;
        }
    }

    public function ubahData()
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $this->model('SppModel')->ubahDataSpp($_POST);
            header('Location: ' . BASEURL . 'SppController');
            exit;
        }
    }

    public function hapus($id_spp)
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $this->model('SppModel')->hapusDataSpp(base64_decode($id_spp));
            header('Location: ' . BASEURL . 'SppController');
            exit;
        }
    }
}
