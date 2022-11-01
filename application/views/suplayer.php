<div class="row">
    <div class="col-12">

        <a href="<?= base_url(); ?>Suplayer/tambah_suplayer" class="btn btn-primary">Tambah Suplayer</a>

        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Table Suplayer</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"> No. </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"> Nama Suplayer </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"> Alamat </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"> Aksi </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach($suplayer as $row): ?>
                            <tr>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0"><?= $no++; ?></p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0"><?= $row['nama_suplayer']; ?></p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0"><?= $row['alamat_suplayer']; ?></p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0"><a href="<?= base_url(); ?>Suplayer/edit_suplayer/<?= $row['id_suplayer']; ?>" class=" btn btn-warning me-2">Edit</a><a href="<?= base_url(); ?>Suplayer/delet_suplayer/<?= $row['id_suplayer']; ?>" class="btn btn-danger" onclick="return confirm(' yakin ingin hapus') " >Delete</a></p>
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