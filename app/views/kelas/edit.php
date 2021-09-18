<h3><a href="<?= BASEURL; ?>KelasController/index">Kembali</a></h3>

<h1><?= $data['title'] ?></h1>

<form action="<?= BASEURL; ?>KelasController/ubahData" method="POST">
    <input type="hidden" name="id_kelas" value="<?= $data['kelas']['id_kelas']?>" />
    
    <table>
        <tr>
            <td>Nama Kelas</td>
            <td>
                <input type="text" name="inputNamaKelas" value="<?= $data['kelas']['nama_kelas']?>" required>
            </td>
        </tr>
        <tr>
            <td>Kompetensi Keahlian</td>
            <td>
                <input type="text" name="inputKompetensiKeahlian" value="<?= $data['kelas']['kompetensi_keahlian']?>" required>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Ubah">
            </td>
        </tr>
    </table>
</form>