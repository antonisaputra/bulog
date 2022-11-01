<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Silahkan Pilih Barang Yang Mau Dipesan</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"> No. </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"> Nama Barang </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"> Jenis Barang </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"> Suplayer </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"> Stok </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"> Harga </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"> Aksi </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach($barang_masuk as $row): ?>
                            <tr>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0"><?= $no++; ?></p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0"><?= $row['nama_barang']; ?></p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0"><?= $row['jenis_barang']; ?></p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0"><?= $row['nama_suplayer']; ?></p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0"><?= $row['stok_barang']; ?></p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0"><?= $row['harga']; ?></p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0"><a href="<?= base_url(); ?>Barang_keluar/pilih_penerima/<?= $row['id']; ?>" class=" btn btn-success me-2">Pesan Barang</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>