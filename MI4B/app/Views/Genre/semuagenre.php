
<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-mod-12">
            <table class="table table-hover">
                <tr>
                    <th>No</th>
                    <th>Nama genre</th>
                    <th>Created At</th>
                    <th>Update At</th>
                    <th>Action</th>
                </tr>
                <?php $i = 1;?>
                <?php foreach ($semua_genre as $Genre) : ?>
                    <tr>
                      <td><?= $i++; ?></td>
                        <td><?= $Genre['nama_genre']?></td>
                        <td><?= $Genre['created_at']?></td>
                        <td><?= $Genre['update_at']?></td>
                        <td>
                            <a href="" class="btn btn-success">Update</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection()?>
</table> 
