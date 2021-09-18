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
            $this->view('layout/header');
            $this->view('layout/navbar', $data);
            $this->view('pembayaran/index', $data);
            $this->view('layout/footer');
        }
    }
}
