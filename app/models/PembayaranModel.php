<?php

class PembayaranModel
{
    private $table = 'pembayaran';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getPembayaran()
    {
        $this->db->query('SELECT * FROM ' . $this->table);

        return $this->db->resultSet();
    }

    public function getPembayaranById($id_pembayaran)
    {
        $this->db->query(' SELECT * FROM ' . $this->table . ' WHERE id_pembayaran=:id_pembayaran ');
        $this->db->bind('id_pembayaran', $id_pembayaran);

        return $this->db->single();
    }

    public function tambahPembayaran($data)
    {
        $timestamp = strtotime($data['inputTanggal']); 
        $date = date('d', $timestamp);
        $month = date('m', $timestamp);
        $year = date('Y', $timestamp);

        $this->db->query("INSERT INTO " . $this->table . " VALUES ('', :id_petugas, :nisn, :tgl_bayar, :bulan_bayar, :tahun_bayar, :id_spp, :jumlah_bayar)");
        $this->db->bind('id_petugas', $data['id_petugas']);
        $this->db->bind('nisn', $data['selectedNisn']);
        $this->db->bind('tgl_bayar', $date);
        $this->db->bind('bulan_bayar', $month);
        $this->db->bind('tahun_bayar', $year);
        $this->db->bind('id_spp', $data['selectedSpp']);
        $this->db->bind('jumlah_bayar', $data['inputNominal']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusPembayaran($id_pembayaran)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id_pembayaran = :id_pembayaran');
        $this->db->bind('id_pembayaran', $id_pembayaran);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahPembayaran($data)
    {
        $timestamp = strtotime($data['inputTanggal']); 
        $date = date('d', $timestamp);
        $month = date('m', $timestamp);
        $year = date('Y', $timestamp);

        $this->db->query('UPDATE ' . $this->table . ' SET id_petugas = :id_petugas, nisn = :nisn, tgl_bayar = :tgl_bayar, bulan_bayar = :bulan bayar, tahun_bayar = :tahun_bayar, id_spp = :id_spp, jumlah_bayar = :jumlah_bayar WHERE id_pembayaran = :id_pembayaran');
        $this->db->bind('id_pembayaran', $data['id_pembayaran']);
        $this->db->bind('id_petugas', $data['id_petugas']);
        $this->db->bind('nisn', $data['inputNisn'] );
        $this->db->bind('tgl_bayar', $date);
        $this->db->bind('bulan_bayar', $month);
        $this->db->bind('tahun_bayar', $year);
        $this->db->bind('id_spp', $data['selectedSpp']);
        $this->db->bind('jumlah_bayar', $data['inputNominal']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
