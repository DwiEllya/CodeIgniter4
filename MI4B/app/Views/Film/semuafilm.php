<?=$this -> extend('layout/layout')?>

<?=$this -> section('content')?>
    <h1>Daftar Film</h1>
      <div class="row">
      <?php foreach($semua_film as $Film): ?>
      <div class="col-md-4">
      <div class="card">
      <img src="/assets/film/<?= $Film['cover']?>" class="card-img-top " alt="">
      <div class="card-body">
          <h5 class="card-title"><?php echo $Film['nama_film']?></h5>
          <p class="card-text"><?=$Film ['nama_genre'] ?> || <?=$Film['duration']?></p>
          <a href="#" class="btn btn-info">Detail</a>
          <a href="#" class="btn btn-success">Update</a>
          <a href="#" class="btn btn-warning">Delete</a>
  </div>
</div>
</div>
      <?php endforeach; ?>
</div>
</div>
      <?= $this->endSection()?>
