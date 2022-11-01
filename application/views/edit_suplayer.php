<div class="row">
    <div class="col-6">

        <div class="card-body">
            <form action="" method="POST" role="form">
                <label>Nama Suplayer</label>
                <div class="mb-3">
                    <input type="text" name="nama_suplayer" class="form-control" placeholder="Masukkan Nama Suplayer" value="<?= $suplayer->nama_suplayer; ?>" >
                    <?php form_error('nama_suplayer','<small class="text-danger">','</small>'); ?>
                </div>
                <label>Alamat Suplayer</label>
                <div class="mb-3">
                    <input type="text" name="alamat_suplayer" value="<?= $suplayer->alamat_suplayer; ?>" class="form-control" placeholder="Masukkan Alamat Suplayer">
                    <?php form_error('alamat_suplayer','<small class="text-danger">','</small>'); ?>
                </div>
                <div class="col-5">
                    <div class="text-center">
                        <div class="d-flex">
                            <a href="<?= base_url(); ?>Suplayer" class="btn btn-danger me-3">Kembali</a>
                            <button type="submit" class="btn btn-success">Edit Suplayer</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>