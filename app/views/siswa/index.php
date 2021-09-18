<h3><a href="<?= BASEURL . 'home/welcome'?>">Kembali</a></h3>

<h1><?= $data['title'] ?></h1>

<h3><a href="<?= BASEURL . 'SiswaController/add'?>">Tambah Data</a></h3>

<table border="1">
    <tr>
        <td>NISN</td>
        <td>NIS</td>
        <td>Nama</td>
        <td>Kelas</td>
        <td>Alamat</td>
        <td>No Telfon</td>
        <td>SPP</td>
        <td>action</td>
    </tr>
    <?php foreach ($data['siswa'] as $siswa) { ?>
    <tr>
        <td><?= $siswa['nisn'] ?></td>
        <td><?= $siswa['nis'] ?></td>
        <td><?= $siswa['nama'] ?></td>
        <td><?= $siswa['id_kelas'] ?></td>
        <td><?= $siswa['alamat'] ?></td>
        <td><?= $siswa['no_telp'] ?></td>
        <td><?= $siswa['id_spp'] ?></td>
        <td>
            <a href="#" data-idsiswa="<?= $siswa['id_siswa'] ?>">Ubah</a> |
            <a href="<?= BASEURL . 'SiswaController/hapus/' . $siswa['id_siswa'] ?>" onclick="return confirm('Anda yakin menghapus data ini?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>
