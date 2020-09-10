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
        <script type='text/javascript'>
            msg = "Selamat datang";
            msg = msg + " " +"<?php echo session()->get('username')?>"+" -- "+" ";
            pos = 0;
            function scrollMSG() {
                document.title = msg.substring(pos, msg.length) + msg.substring(0, pos);
                pos++;
                if (pos > msg.length)
                    pos = 0
                window.setTimeout("scrollMSG()", 200);
            }
            scrollMSG();
        </script>
        <script src="<?= base_url('public/jquery-3.5.1.js') ?>"></script>
        <link
            href="<?= base_url('public/bootstrap/css/bootstrap.min.css') ?>"
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
        <script src="<?= base_url('public/bootstrap/js/bootstrap.min.js') ?>"></script>
    </body>
</html>