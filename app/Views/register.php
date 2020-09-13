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

		$repeatPassword = [
			'name' => 'repeatPassword',
			'id' => 'repeatPassword',
			'class' => 'form-control'
		];

		$session = session();
		$errors = $session->getFlashdata('errors');
	?>
<div class="row justify-content-center mt-3">
    <div class="card col-9 col-md-4"><br/>
        <h3 class="text-center mb-4">Register</h3>
        <?php if($errors != null): ?>
        <div class="alert alert-danger col-11 alert-dismissible ml-md-3 ml-3">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <h6 class="alert-heading">Terjadi Kesalahan</h6>
            <hr>
            <p class="mb-0">
                <?php
					foreach($errors as $err){
						echo $err.'<br/>';
					}
				?>
            </p>
        </div>
        <?php endif ?>
        <?= form_open('Auth/register') ?>
        <div class="form-group col-12">
            <?= form_label("Username", "username") ?>
            <?= form_input($username) ?>
        </div>
        <div class="form-group col-12">
            <?= form_label("Password", "password") ?>
            <?= form_password($password) ?>
        </div>
        <div class="form-group col-12">
            <?= form_label("Repeat Password", "repeatPassword") ?>
            <?= form_password($repeatPassword) ?>
        </div>
        <div class="text-center">
			<a class="btn btn-light" href="<?= site_url('auth/login')?>">
                Login
            </a>
            <?= form_submit('submit', 'Register',['class'=>'btn btn-success']) ?><br/><br/>
        </div>
    </div>
</div>
<?= form_close() ?>
<?= $this->endSection() ?>