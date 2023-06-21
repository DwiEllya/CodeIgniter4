<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout Dwi</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LK 99 Dwi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" 
    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="/film/all">Beranda</a>
        <a class="nav-link" href="/film/index">Semua Film</a>
        <a class="nav-link" href="/genre/index">Kategori Film</a>
        <a class="nav-link" href="/film/about">Tentang Kami</a>
      </div>
    </div>
  </div>
</nav>
<div class="container">
        <?= $this->renderSection('content') ?>
    </div>
</div>
</body>
</html>