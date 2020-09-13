<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h4>Barang</h4><br/>
<table class="table table-responsive">
    <thead>
        <th>No</th>
        <th>Barang</th>
        <th>Gambar</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php foreach($barangs as $index=>$barang): ?>
            <tr>
                <td><?= ($index+1) ?></td>
                <td><?= $barang->nama ?></td>
                <td><img src="<?= base_url('uploads/'.$barang->gambar)?>" width="200px" alt="image" class="img-fluid"/></td>
                <td><?= $barang->harga ?></td>
                <td><?= $barang->stok ?></td>
                <td>
                    <a href="<?= site_url('barang/view/'.$barang->id) ?>" class="btn btn-primary btn-block">View</a>
                    <a href="<?= site_url('barang/update/'.$barang->id) ?>" class="btn btn-success btn-block">Update</a>
                    <a href="<?= site_url('barang/delete/'.$barang->id) ?>" class="btn btn-danger btn-block">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?= $this->endsection() ?>