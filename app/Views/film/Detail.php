<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid" style="background-image: url('/img/<?= $film['cover']; ?>'); background-size: contain;">
    <div class="row justify-content-between">
        <div class="col-2">

        </div>
        <div id="content" class="col text-left">
            <div class="row">
                <div class="col"></div>
                <div class="col p-4 ml-4 mr-4">
                    <h1 class="movie-title text-warning"><strong><?= $film['judul']; ?></strong></h1>
                    <br><br>
                    <p class="text-warning">Director by <?= $film['sutradara']; ?></p>
                    <p class="text-white"><?= $film['synopsis']; ?></p>
                    <br>
                    <a href="/film/movie" class="button mr-4 text-white font-weight-bold">BACK TO LIST FILM</a>
                    <a href="/film/edit/<?= $film['slug']; ?>"" class=" button mr-4 text-white font-weight-bold">EDIT</a>
                    <form action="/film/<?= $film['id']; ?>" method="post" class="d-inline">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="button text-white font-weight-bold">DELETE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="row">
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
    </div> -->
</div>
<?= $this->endSection(); ?>