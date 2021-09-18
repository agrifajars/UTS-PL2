<h3><a href="<?= BASEURL; ?>PetugasController/index">Kembali</a></h3>

<h1><?= $data['title'] ?></h1>

<form action="<?= BASEURL; ?>PetugasController/tambah" method="POST">
    <table>
        <tr>
            <td>Username</td>
            <td>
                <input type="text"  name="inputUsername" required>
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
                <input type="password" name="inputPassword" required>
            </td>
        </tr>
        <tr>
            <td>Nama Petugas</td>
            <td>
                <input type="password" name="inputNamaPetugas" required>
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