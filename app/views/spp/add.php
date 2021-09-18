<h3><a href="<?= BASEURL; ?>SppController/index">Kembali</a></h3>

<h1><?= $data['title'] ?></h1>

<form action="<?= BASEURL; ?>SppController/tambah" method="POST">
    <table>
        <tr>
            <td>Tahun</td>
            <td><input type="number" name="inputTahun" required></td>
        </tr>
        <tr>
            <td>Nominal</td>
            <td><input type="number" name="inputNominal" required></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Simpan">
            </td>
        </tr>
    </table>
</form>