<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php

$nama = [
    'name'  =>  'nama',
    'id'    =>  'nama',
    'value' =>  null,
    'class' =>  'form-control',
];

$harga = [
    'name'  =>  'harga',
    'id'    =>  'harga',
    'value' =>  null,
    'class' =>  'form-control',
    'type'  =>  'number',
    'min'   =>  0,
];

$stok = [
    'name'  =>  'stok',
    'id'    =>  'stok',
    'value' =>  null,
    'class' =>  'form-control',
    'type'  =>  'number',
    'min'   =>  0,
];

$gambar = [
    'name'  =>  'gambar',
    'id'    =>  'gambar',
    'value' =>  null,
    'class' =>  'form-control',
];

$submit = [
    'name'  =>  'submit',
    'id'    =>  'submit',
    'value' =>  'Tambah',
    'class' =>  'btn btn-success',
    'type'  =>  'submit',
];
?>
<h3>Tambah Barang</h3>

<?= form_open_multipart('Barang/create') ?>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <?= form_label("Gambar", "gambar") ?><br/>
            <img
                class="mb-3"
                src="<?= base_url('uploads/default.png')?>"
                id="gambar_preview"
                width="200px"/>
            <?= form_upload($gambar) ?>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <?= form_label("Nama", "nama") ?>
            <?= form_input($nama) ?>
        </div>
        <div class="form-group">
            <?= form_label("Harga", "harga") ?>
            <?= form_input($harga) ?>
        </div>
        <div class="form-group">
            <?= form_label("Stok", "stok") ?>
            <?= form_input($stok) ?>
        </div>
        <div class="text-right">
            <?= form_submit($submit) ?>
        </div>
    </div>
</div>
<?= form_close() ?>

<!-- membuat preview gambar sebelum di upload-->
<script>
    function bacaGambar(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#gambar_preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#gambar").change(function () {
        bacaGambar(this);
    });
</script>
<?= $this->endsection() ?>
