<?php

class SiswaModel
{
    private $table = 'siswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getSiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getSiswaByNISN($NISN)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nisn=:nisn ');
        $this->db->bind('nisn', $NISN);
        return $this->db->single();
    }

    public function tambahSiswa($data)
    {
        $this->db->query("INSERT INTO " . $this->table . " VALUES (:nisn, :nis, :nama, :id_kelas, :alamat, :no_telp, :id_spp)");
        $this->db->bind('nisn', $data['inputNisn']);
        $this->db->bind('nis', $data['inputNis']);
        $this->db->bind('nama', $data['inputNama']);
        $this->db->bind('id_kelas', $data['selectedKelas']);
        $this->db->bind('alamat', $data['inputAlamat']);
        $this->db->bind('no_telp', $data['inputNoTelp']);
        $this->db->bind('id_spp', $data['selectedSpp']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusSiswa($NISN)
    {
        $this->db->query("DELETE FROM " . $this->table . " WHERE nisn = :nisn");
        $this->db->bind('nisn', $NISN);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahSiswa($data)
    {
        $this->db->query("UPDATE " . $this->table . " SET nis = :nis, nama = :nama, id_kelas = :id_kelas, alamat = :alamat, no_telp = :no_telp, id_spp = :id_spp WHERE nisn = :nisn");
        $this->db->bind('nisn', $data['inputNisn']);
        $this->db->bind('nis', $data['inputNis']);
        $this->db->bind('nama', $data['inputNama']);
        $this->db->bind('id_kelas', $data['selectedKelas']);
        $this->db->bind('alamat', $data['inputAlamat']);
        $this->db->bind('no_telp', $data['inputNoTelp']);
        $this->db->bind('id_spp', $data['selectedSpp']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
