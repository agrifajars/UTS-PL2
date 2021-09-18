<h3><a href="<?= BASEURL; ?>SiswaController/index">Kembali</a></h3>

<h1><?= $data['title'] ?></h1>

<form action="<?= BASEURL; ?>SiswaController/tambah" method="POST">
    <table>
        <tr>
            <td>NSIN</td>
            <td>
                <input type="number"  name="inputNisn" required>
            </td>
        </tr>
        <tr>
            <td>NIS</td>
            <td>
                <input type="number" name="inputNis" required>
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>
                <input type="text" name="inputNama" required>
            </td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>
                <select name="selectedKelas">
                    <option selected disabled>Pilih Kelas</option>
                    <?php foreach ($data['kelas'] as $kelas) { ?>
                        <option value="<?= $kelas['id_kelas']?>"><?= $kelas['nama_kelas']?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <input type="text" name="inputAlamat" required>
            </td>
        </tr>
        <tr>
            <td>No Telfon</td>
            <td>
                <input type="number" name="inputNoTelp" required>
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
            <td>
                <input type="submit" value="Simpan">
            </td>
        </tr>
    </table>
</form>