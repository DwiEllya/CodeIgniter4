<?=$this -> extend('layout/layout')?>

<?=$this -> section('content')?>
<div class="container"></div>
<div class ="row">
    <div class="col-md-12">
    <div class ="card-header">
    <div class ="row">
    <div class="col-md-6">
      <h1> Semua Film<h1>
</div>
<div class="col-md-6 text-end">
  <a href="/film/add" class="btn btn-primary">Tambah Data</a>
</div>
</div>
</div>
<div class="card-body">
        <table class= "table table-hover">
            <tr>
            <th>No</th>
            <th>Nama Genre</th>
            <th>Created At</th>
            <th>Update At</th>
</tr>
<?php $i =1;?>
<?php foreach($data_genre as $Genre) : ?>
    <tr>
        <td> <?= $i++; ?></td>
        <td> <?= $Genre["nama_genre"] ?></td>
        <td> <?= $Genre["created_at"]?></td>
        <td> <?= $Genre["update_at"]?></td>
<td>
    <a href="" class="btn btn-success" > Update </a>
    <a href="" class="btn btn-success"> Delete</a>
</td>
</tr>
<?php endforeach; ?>
    </div>
    <?= $this->endSection()?>
</table>
