<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semua Film</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Studio Film</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="film/film">Semua Film</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="film/genre">Kategori Film</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="film/about">Tentang Kami</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


        <h1>Data Film</h1>
        <div class="row row-cols-1 row-cols-md-5 g-4">
            <?php foreach ($semuafilm as $film) : ?>
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="/assets/cover/<?= $film['cover'] ?>" alt="Cover Film">
                        <div class="card-body">
                            <h5 class="card-title"><?= $film['nama_film'] ?></h5>
                            <p class="card-text"><strong>Genre:</strong> <?= $film['nama_genre'] ?></p>
                            <p class="card-text"><strong>Duration:</strong> <?= $film['duration'] ?></p>
                            <a href="#" class="btn btn-secondary">Details</a>
                            <a href="#" class="btn btn-success">Update</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                          </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

<script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>