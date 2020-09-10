<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta
            name="author"
            content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v4.0.1">
        <title>Rodhian</title>
        <script src="<?= base_url('jquery-3.5.1.js') ?>"></script>
        <link
            href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>"
            rel="stylesheet">

        <style >
          body {
              padding-top: 5rem;
          }
          .starter-template {
              padding: 3rem 1.5rem;
              text-align: center;
          }
        </style>
    </head>
    <body>

        <?= $this->include('navbar') ?>

        <main role="main" class="container">

            <?= $this->renderSection('content') ?>

        </main>
        <!-- /.container -->
        <script src="<?= base_url('bootstrap/js/bootstrap.min.js') ?>"></script>
    </body>
</html>