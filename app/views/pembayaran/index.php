<div class="container mt-3">
    <h1 class="text-center text-uppercase"><?= $data['title'] ?></h1>

    <!-- Button trigger modal -->
    <div class="d-flex flex-row-reverse">
        <button type="button" class="btn btn-primary mb-3 col-lg-2" id="tambahDataPembayaran" data-bs-toggle="modal" data-bs-target="#sppModal">
            Tambah SPP
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="sppModal" tabindex="-1" aria-labelledby="sppModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?= BASEURL; ?>SppController/tambah" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="sppModalLabel"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id_spp" id="id_spp">
                        <div class="mb-3">
                            <label for="inputTahun" class="form-label">Tahun</label>
                            <input type="text" class="form-control" id="inputTahun" name="inputTahun">
                        </div>
                        <div class="mb-3">
                            <label for="inputNominal" class="form-label">Nominal</label>
                            <input type="text" class="form-control" id="inputNominal" name="inputNominal">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary"></button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <?php Flasher::flash() ?>
        </div>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Petugas</th>
                <th>NISN</th>
                <th>Tanggal Bayar</th>
                <th>Bulan Bayar</th>
                <th>Tahun Bayar</th>
                <th>SPP</th>
                <th>Jumlah Bayar</th>
                <th style="width: 15%;">action</th>
            </tr>
        </thead>
        <?php foreach ($data['pembayaran'] as $pembayaran) { ?>
            <tr>
                <td><?= $pembayaran['id_pembayaran'] ?></td>
                <td><?= $pembayaran['id_petugas'] ?></td>
                <td><?= $pembayaran['nisn'] ?></td>
                <td><?= $pembayaran['tgl_bayar'] ?></td>
                <td><?= $pembayaran['bulan_bayar'] ?></td>
                <td><?= $pembayaran['tahun_bayar'] ?></td>
                <td><?= $pembayaran['id_spp'] ?></td>
                <td><?= number_format($pembayaran['jumlah_bayar']) ?></td>
                <td>
                    <a href="#" class="btn btn-success btn-ubah-pembayaran" data-bs-toggle="modal" data-bs-target="#pembayaranModal" data-idpembayaran="<?= $pembayaran['id_pembayaran'] ?>">ubah</a>
                    <a href="<?= BASEURL . 'PembayaranController/hapus/' . $pembayaran['id_pembayaran'] ?>" class="btn btn-danger" onclick="return confirm('Anda yakin menghapus data ini?')">delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>