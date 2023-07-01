<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studio Film</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <script src="/assets/js/unpkg.com_sweetalert@2.1.2_dist_sweetalert.min.js"></script> <!-- tambahkan ini -->
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <a class="navbar-brand" href="<?= base_url('/') ?>" >Studio Film</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link " href="<?= base_url('/') ?>" >Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('film/film') ?>" >Semua Film</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('film/genre') ?>" >Kategori Film</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('film/about') ?>" >Tentang Kami</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
</nav>

    
    <?= $this->renderSection('content') ?>    
    

    <script src="/assets/js/bootstrap.min.js"></script>

    <?php if (session()->getFlashdata('success')) : ?>
        <script>
            swal({
                title: "Informasi",
                text: "<?= session()->getFlashdata('success') ?>",
                icon: "success",
                button: "OK",
            });
        </script>

    <?php endif; ?>

</body>
</html>