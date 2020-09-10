<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php
	$username = [
		'name' => 'username',
		'id' => 'username',
		'value' => null,
		'class' => 'form-control'
	];

	$password = [
		'name' => 'password',
		'id' => 'password',
		'class' => 'form-control'
	];

	$session = session();
	$errors = $session->getFlashdata('errors');

	?>
<div class="row justify-content-center mt-3">
    <div class="card col-9 col-md-4"><br/>
        <h3 class="text-center mb-4">Login</h3>
        <?php if($errors != null): ?>
        <div class="alert alert-danger" role="alert">
            <h5 class="alert-heading">Terjadi Kesalahan</h5>
            <hr>
            <p class="mb-0">
                <?php
					foreach($errors as $err){
						echo $err.'<br>';
					}
				?>
            </p>
        </div>
        <?php endif ?>
        <?= form_open('Auth/login') ?>
        <div class="form-group col-12">
            <?= form_label("Username", "username") ?>
            <?= form_input($username) ?>
        </div>
        <div class="form-group col-12">
            <?= form_label("Password", "password") ?>
            <?= form_password($password) ?>
        </div>
        <div class="text-center">
		<a class="btn btn-light" href="<?= site_url('auth/register')?>">
                        Register
                    </a>
            <?= form_submit('submit', 'Login',['class'=>'btn btn-primary']) ?><br/><br/>
        </div>
    </div>
</div>
<?= form_close() ?>

<?= $this->endSection() ?>