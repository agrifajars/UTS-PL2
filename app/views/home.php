<section>
    <a href="<?= BASEURL; ?>SiswaController/index">Siswa</a> |
    <a href="<?= BASEURL; ?>SppController/index">SPP</a> |
    <a href="<?= BASEURL; ?>PembayaranController/index">Pembayaran</a> |
    <a href="<?= BASEURL; ?>KelasController/index">Kelas</a> |
    <a href="<?= BASEURL; ?>PetugasController/index">Petugas</a> |
    <a href="<?= BASEURL; ?>LoginController/logout">logout</a>

    <hr size="5" color="black">
    <h1 class="display-1 fw-bold">Selamat Datang <?php echo $_SESSION['nama_petugas']; ?></h1>
</section>