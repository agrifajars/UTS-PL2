<h3><a href="<?= BASEURL; ?>PetugasController/index">Kembali</a></h3>

<h1><?= $data['title']?></h1>

<form action="<?= BASEURL; ?>PetugasController/ubahData" method="POST">
    <table>
        <input type="hidden" name="id_petugas" value="<?= $data['petugas']['id_petugas']?>" />
        <tr>
            <td>Username</td>
            <td>
                <input type="text"  name="inputUsername" value="<?= $data['petugas']['username']?>" required>
            </td>
        </tr>
        <tr>
            <td>Nama Petugas</td>
            <td>
                <input type="text" name="inputNamaPetugas" value="<?= $data['petugas']['nama_petugas']?>" required>
            </td>
        </tr>
        <tr>
            <td>Level</td>
            <td>
                <select name="selectLevel">
                    <option selected>Pilih Level</option>
                    <option value="Administrator">Administrator</option>
                    <option value="Petugas">Petugas</option>
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