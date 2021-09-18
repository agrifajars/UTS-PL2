<h3><a href="<?= BASEURL; ?>KelasController/index">Kembali</a></h3>

<h1><?= $data['title'] ?></h1>

<form action="<?= BASEURL; ?>KelasController/tambah" method="POST">
    <table>
        <tr>
            <td>Nama Kelas</td>
            <td>
                <input type="text"  name="inputNamaKelas" required>
            </td>
        </tr>
        <tr>
            <td>Kompetensi Keahlian</td>
            <td>
                <input type="text" name="inputKompetensiKeahlian" required>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Simpan">
            </td>
        </tr>
    </table>
</form>