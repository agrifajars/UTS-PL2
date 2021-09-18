<h3><a href="<?= BASEURL; ?>PembayaranController/index">Kembali</a></h3>

<h1><?= $data['title'] ?></h1>

<form action="<?= BASEURL; ?>PembayaranController/ubahData" method="POST">
    <table>
        <input type="hidden" name="id_pembayaran" value="<?= $data['pembayaran']['id_pembayaran']?>">
        <input type="hidden" name="id_petugas" value="<?php echo $_SESSION['id_petugas']; ?>">
        <tr>
            <td>Nama Petugas</td>
            <td>
                <input type="text" value="<?php echo $_SESSION['nama_petugas']; ?>" disabled>
            </td>
        </tr>
        <tr>
            <td>NISN</td>
            <td>
                <input type="text" name="inputNisn" value="<?= $data['pembayaran']['nisn']?>" disabled>
            </td>
        </tr>
        <tr>
            <td>Tanggal Bayar</td>
            <td>
                <input type="date" name="inputTanggal" placeholder="dd-MM-yyyy">
            </td>
        </tr>
        <tr>
            <td>SPP</td>
            <td>
                <select name="selectedSpp">
                    <option selected disabled>Pilih SPP</option>
                    <?php foreach ($data['spp'] as $spp) { ?>
                        <option value="<?= $spp['id_spp']?>"><?= $spp['tahun']?> - <?= $spp['nominal']?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Jumlah Bayar</td>
            <td>
                <input type="number" name="inputNominal" value="<?= $data['pembayaran']['jumlah_bayar']?>" required>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Ubah">
            </td>
        </tr>
    </table>
</form>