<div class="row">
    <div class="col-6">

        <div class="card-body">
            <form action="" method="POST" role="form">
                <label>Jumlah</label>
                <div class="mb-3">
                    <input type="text" name="jumlah" class="form-control" placeholder="Masukkan Nama Barang">
                    <?= form_error('jumlah', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="col-5">
                    <div class="text-center">
                        <div class="d-flex">
                            <a href="<?= base_url(); ?>Barang_masuk" class="btn btn-danger me-3">Kembali</a>
                            <button type="submit" class="btn btn-success">Tambah Jumlah Barang</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>