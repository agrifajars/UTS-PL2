<h3><a href="<?= BASEURL . 'home/welcome'?>">Kembali</a></h3>

<h1><?= $data['title'] ?></h1>

<h3><a href="<?= BASEURL . 'SppController/add'?>">Tambah Data</a></h3>

<table border="1">
    <tr>
        <td>Id</td>
        <td>Tahun</td>
        <td>Nominal</td>
        <td>Aksi</td>
    </tr>
    <?php foreach ($data['spp'] as $spp) { ?>
    <tr>
        <td><?= $spp['id_spp'] ?></td>
        <td><?= $spp['tahun'] ?></td>
        <td><?= number_format($spp['nominal']) ?></td>
        <td>
            <a href="<?= BASEURL . 'SppController/edit/' . base64_encode($spp['id_spp']) ?>">ubah</a> |
            <a href="<?= BASEURL . 'SppController/hapus/' . base64_encode($spp['id_spp']) ?>" onclick="return confirm('Anda yakin menghapus data ini?')">hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>