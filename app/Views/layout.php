<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

  <title>Starter Template for Bootstrap</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/starter-template/">

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('bootstrap-4.1.3-dist/css/bootstrap.min.css') ?>" rel="stylesheet">

  <!-- Custom styles for this template -->
  <style>
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

    <?= $this->renderSection('content'); ?>

  </main><!-- /.container -->

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <!-- <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
  </script>
  <script src="../../assets/js/vendor/popper.min.js"></script> -->
  <script src="<?= base_url('bootstrap-4.1.3-dist/js/bootstrap.min.js') ?>"></script>
  <script src="<?= base_url('jquery-3.5.1.min/js') ?>"></script>
</body>

</html>