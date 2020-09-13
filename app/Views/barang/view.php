<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h4>Detail Barang</h4>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-body">
                    <img src="<?= base_url('uploads/'.$barang->gambar)?>" alt="image" class="img-fluid"/>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <h4 class="text-success mt-3"><?=  $barang->nama ?></h4>
            <h6>Harga : <?= $barang->harga ?> </h6>
            <h6>Stok : <?= $barang->stok ?> </h6>
        </div>
    </div>
</div>
<?= $this->endsection() ?>