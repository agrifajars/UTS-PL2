<h3><a href="<?= BASEURL . 'home/welcome'?>">Kembali</a></h3>

<h1><?= $data['title'] ?></h1>

<h3><a href="<?= BASEURL . 'PembayaranController/add'?>">Tambah Data</a></h3>

<table border="1">
    <tr>
        <th>Id</th>
        <th>Petugas</th>
        <th>NISN</th>
        <th>Tanggal Bayar</th>
        <th>Bulan Bayar</th>
        <th>Tahun Bayar</th>
        <th>SPP</th>
        <th>Jumlah Bayar</th>
        <th style="width: 15%;">Aksi</th>
    </tr>
    <?php foreach ($data['pembayaran'] as $pembayaran) { ?>
    <tr>
        <td><?= $pembayaran['id_pembayaran'] ?></td>
        <td><?= $pembayaran['id_petugas'] ?></td>
        <td><?= $pembayaran['nisn'] ?></td>
        <td><?= $pembayaran['tgl_bayar'] ?></td>
        <td><?= $pembayaran['bulan_bayar'] ?></td>
        <td><?= $pembayaran['tahun_bayar'] ?></td>
        <td><?= $pembayaran['id_spp'] ?></td>
        <td><?= number_format($pembayaran['jumlah_bayar']) ?></td>
        <td>
            <a href="<?= BASEURL . 'PembayaranController/edit/' . base64_encode($pembayaran['id_pembayaran']) ?>">Ubah</a> |
            <a href="<?= BASEURL . 'PembayaranController/hapus/' . base64_encode($pembayaran['id_pembayaran']) ?>" onclick="return confirm('Anda yakin menghapus data ini?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>