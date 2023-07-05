<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>
<div class="container"></div>
<div class="row">
    <div class="col-md-12">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h1> Semua Film<h1>
                </div>
                <div class="col-md-6 text-end">
                    <a href="/film/add" class="btn btn-primary">Tambah Data</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <tr>
                    <th>No</th>
                    <th>Nama Film</th>
                    <th>Cover</th>
                    <th>Genre</th>
                    <th>Duration</th>
                    <th>Action</th>
                </tr>
                <?php $i = 1; ?>
                <?php foreach ($data_film as $Film) : ?>
                    <tr>
                        <td> <?= $i++; ?></td>
                        <td> <?= $Film["nama_film"] ?></td>
                        <td> <img src="/assets/film/<?= $Film["cover"] ?>" class="card-img-top full-width-image" style="width:50px" alt="Poster Film"></td>
                        <td> <?= $Film["nama_genre"] ?></td>
                        <td> <?= $Film["duration"] ?></td>
                        <td>
                        <td>
                            <a href="/film/update/<?= encryptUrl($Film["id"]); ?>" class="btn btn-success">Update</a>
                            <a class="btn btn-danger" onclick="return confirmDelete()">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</div>

<script src="/assets/js/bootsrap.min.js"></script>
<!-- tambahkan dari sini  -->
<script>
    function confirmDelete() {
        swal({
                title: "Apakah Anda yakin?",
                text: "setelah dihapus! data anda akan benar-benar hilang!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {

                    window.location.href = "/film/destroy/<?= encryptUrl($Film['id']) ?>";

                } else {
                    swal("Data tidak jadi dihapus!");
                }
            });
    }
</script>
<!-- sampai sini -->
<?= $this->endSection() ?>