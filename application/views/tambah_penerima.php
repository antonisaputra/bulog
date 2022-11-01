<div class="row">
    <div class="col-6">

        <div class="card-body">
            <form action="" method="POST" role="form">
                <label>Nama Penerima</label>
                <div class="mb-3">
                    <input type="text" name="nama_penerima" class="form-control" placeholder="Masukkan Nama Penerima">
                    <?= form_error('nama_penerima', '<small class="text-danger">', '</small>'); ?>
                </div>
                <label>Alamat Penerima</label>
                <div class="mb-3">
                    <input type="text" name="alamat_penerima" class="form-control" placeholder="Masukkan Alamat Penerima">
                    <?= form_error('alamat_penerima', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="col-5">
                    <div class="text-center">
                        <div class="d-flex">
                            <a href="<?= base_url(); ?>Penerima" class="btn btn-danger me-3">Kembali</a>
                            <button type="submit" class="btn btn-success">Tambah Penerima</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>