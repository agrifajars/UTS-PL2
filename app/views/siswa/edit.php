<h3><a href="<?= BASEURL; ?>SiswaController/index">Kembali</a></h3>

<h1><?= $data['title'] ?></h1>

<form action="<?= BASEURL; ?>SiswaController/ubahData" method="POST">
    <table>
        <tr>
            <td>NISN</td>
            <td>
                <input type="number"  name="inputNisn" value="<?= $data['siswa']['nisn']?>" required>
            </td>
        </tr>
        <tr>
            <td>NIS</td>
            <td>
                <input type="number" name="inputNis" value="<?= $data['siswa']['nis']?>" required>
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>
                <input type="text" name="inputNama" value="<?= $data['siswa']['nama']?>" required>
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
                <input type="text" name="inputAlamat" value="<?= $data['siswa']['alamat']?>" required>
            </td>
        </tr>
        <tr>
            <td>No Telfon</td>
            <td>
                <input type="number" name="inputNoTelp" value="<?= $data['siswa']['no_telp']?>" required>
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
                <input type="submit" value="Ubah">
            </td>
        </tr>
    </table>
</form>