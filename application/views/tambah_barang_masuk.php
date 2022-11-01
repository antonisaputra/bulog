<div class="row">
    <div class="col-6">

        <div class="card-body">
            <form action="" method="POST" role="form">
                <label for="">Suplayer</label>
                <select class="form-select" name="suplayer" aria-label="Default select example">
                    <?php foreach ($suplayer as $s) : ?>
                        <option value="<?= $s->id_suplayer; ?>"><?= $s->nama_suplayer; ?></option>
                    <?php endforeach; ?>
                </select>
                <label>Nama Barang</label>
                <div class="mb-3">
                    <input type="text" name="nama_barang" class="form-control" placeholder="Masukkan Nama Barang">
                    <?= form_error('nama_barang', '<small class="text-danger">', '</small>'); ?>
                </div>
                <label for="">Jenis</label>
                <select class="form-select" name="jenis" aria-label="Default select example">
                    <option value="Beras Merah">Beras Merah</option>
                    <option value="Beras Putih">Beras Putih</option>
                </select>
                <label>Stok</label>
                <div class="mb-3">
                    <input type="number" name="stok" class="form-control" placeholder="Masukkan Stok Barang">
                    <?= form_error('stok', '<small class="text-danger">', '</small>'); ?>
                </div>
                <label>Harga</label>
                <div class="mb-3">
                    <input type="number" name="harga" class="form-control" placeholder="Masukkan Harga Barang">
                    <?= form_error('harga', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="col-5">
                    <div class="text-center">
                        <div class="d-flex">
                            <a href="<?= base_url(); ?>Barang_masuk" class="btn btn-danger me-3">Kembali</a>
                            <button type="submit" class="btn btn-success">Tambah Barang Masuk</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>