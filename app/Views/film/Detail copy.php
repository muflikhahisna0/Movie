<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row pb-4">
        <div class="col-6">
            <a href="/film/" class="btn btn-warning">Kembali ke List Film</a>
        </div>
        <div class="col-6">
            <a href="" class="btn btn-info">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card" style="width:40rem;">
                <img src="/img/<?= $film['cover']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h1><?= $film['judul']; ?></h1>
                    <p class="card-text"><b>Sutradara &nbsp;:<?= $film['sutradara']; ?></b></p>
                    <p class="card-text"><?= $film['synopsis']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>