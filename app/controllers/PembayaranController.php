<?php

class PembayaranController extends Controller
{
    public function index()
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $data['title'] = 'Pembayaran';
            $data['pembayaran'] = $this->model('PembayaranModel')->getPembayaran();
            $this->view('pembayaran/index', $data);
        }
    }

    public function add()
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $data['title'] = 'Tambah Pembayaran';
            $data['spp'] = $this->model('SppModel')->getSpp();
            $data['siswa'] = $this->model('SiswaModel')->getSiswa();
            $this->view('pembayaran/add', $data);
        }
    }

    public function edit($id_pembayaran)
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $data['title'] = 'Ubah Pembayaran';
            $data['spp'] = $this->model('SppModel')->getSpp();
            $data['pembayaran'] = $this->model('PembayaranModel')->getPembayaranById(base64_decode($id_pembayaran));
            $this->view('pembayaran/edit', $data);
        }
    }

    public function tambah()
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $this->model('PembayaranModel')->tambahPembayaran($_POST);
            header('Location: ' . BASEURL . 'PembayaranController');
            exit;
        }
    }

    public function ubahData()
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $this->model('PembayaranModel')->ubahPembayaran($_POST);
            header('Location: ' . BASEURL . 'PembayaranController');
            exit;
        }
    }

    public function hapus($id_pembayaran)
    {
        if (!isset($_SESSION['is_login'])) {
            header('Location: ' . BASEURL);
        } else {
            $this->model('PembayaranModel')->hapusPembayaran(base64_decode($id_pembayaran));
            header('Location: ' . BASEURL . 'PembayaranController');
            exit;
        }
    }
}
