//navbar
<?= $this->extend('layout') ?>
//content
<?= $this->section('content') ?>
    <h1>Hello WORLD</h1>
    <p>Muhammad rodhian syabri saja ya Lorem ipsum dolor sit amet consectetur adipisicing elit. Non voluptatem accusantium a impedit? Non a nesciunt quos exercitationem animi repudiandae consequatur fuga! Harum perspiciatis voluptate, vel impedit numquam nesciunt tenetur!. Lorem ipsum dolor sit amet consectetur adipisicing elit. Et impedit quod doloribus obcaecati earum consequatur dolorem eius eligendi aut reprehenderit culpa error asperiores provident quisquam quidem, minima quos iusto praesentium. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime, impedit corrupti! Ad dolore officia ipsam a, incidunt, tempora magnam iste quod ut tenetur delectus quibusdam pariatur perspiciatis enim expedita dicta.</p>
    <?= $data ?><br/><br/>
    <?php echo session()->get('username')?>
<?= $this->endSection() ?>