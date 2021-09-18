<h3><a href="<?= BASEURL; ?>SppController/index">Kembali</a></h3>

<h1><?= $data['title']?></h1>

<form action="<?= BASEURL; ?>SppController/ubahData" method="POST">
    <table>
        <input type="hidden" name="id_spp" value="<?= $data['spp']['id_spp']?>" />
        <tr>
            <td>Tahun</td>
            <td><input type="number" name="inputTahun" value="<?= $data['spp']['tahun']?>" required></td>
        </tr>
        <tr>
            <td>Nominal</td>
            <td><input type="number" name="inputNominal" value="<?= $data['spp']['nominal']?>" required></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Ubah">
            </td>
        </tr>
    </table>
</form>