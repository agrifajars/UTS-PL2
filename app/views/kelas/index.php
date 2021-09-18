<h3><a href="<?= BASEURL . 'home/welcome'?>">Kembali</a></h3>

<h1><?= $data['title'] ?></h1>

<h3><a href="<?= BASEURL . 'KelasController/add'?>">Tambah Data</a></h3>

<table border="1">
    <tr>
        <td>Id</td>
        <td>Nama Kelas</td>
        <td>Kompetensi Keahlian</td>
        <td>Aksi</td>
    </tr>
    <?php foreach ($data['kelas'] as $kelas) { ?>
    <tr>
        <td><?= $kelas['id_kelas'] ?></td>
        <td><?= $kelas['nama_kelas'] ?></td>
        <td><?= $kelas['kompetensi_keahlian'] ?></td>
        <td>
            <a href="<?= BASEURL . 'KelasController/edit/' . base64_encode($kelas['id_kelas']) ?>">Ubah</a> |
            <a href="<?= BASEURL . 'KelasController/hapus/' . base64_encode($kelas['id_kelas']) ?>" onclick="return confirm('Anda yakin menghapus data ini?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>