<h3><a href="<?= BASEURL . 'home/welcome'?>">Kembali</a></h3>

<h1><?= $data['title'] ?></h1>

<h3><a href="<?= BASEURL . 'PetugasController/add'?>">Tambah Data</a></h3>

<table border="1">
    <tr>
        <td>Id</td>
        <td>Username</td>
        <td>Nama</td>
        <td>Level</td>
        <td>Aksi</td>
    </tr>
    <?php foreach ($data['petugas'] as $petugas) { ?>
    <tr>
        <td><?= $petugas['id_petugas'] ?></td>
        <td><?= $petugas['username'] ?></td>
        <td><?= $petugas['nama_petugas'] ?></td>
        <td><?= $petugas['level'] ?></td>
        <td>
            <a href="<?= BASEURL . 'PetugasController/edit/' . base64_encode($petugas['id_petugas']) ?>">Ubah</a> |
            <a href="<?= BASEURL . 'PetugasController/hapus/' . base64_encode($petugas['id_petugas']) ?>" onclick="return confirm('Anda yakin menghapus data ini?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>