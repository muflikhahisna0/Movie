<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid text-white" style="background-image: url('/img/b.jpg'); background-size: contain;">
    <div class="row content-list  d-flex flex-column">
        <div class="col p-2">

        </div>
        <div class="col p-4 mt-4">

            <br>
            <h1 class="text-warning">NOW <strong class="text-white">SHOWING</strong></h1>
            <a href="/film/create" class="button text-white mr-4 mb-4 font-weight-bold">+ Add Movie</a>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong> <?= session()->getFlashdata('pesan'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>

            <?php endif; ?>
            <br>
            <div class="row mb-4 ">

                <?php foreach ($film as $f) : ?>
                    <div class="col ">
                        <div class="mt-4 card border-warning" style="width: 17rem; background-color: black; height:450px">
                            <div class="bg-light" style="height: 200px;">
                                <img src="/img/<?= $f['cover']; ?>" class="card-img-top" alt="..." style="min-height: 100%; display: block;">
                            </div>
                            <div class="card-body d-flex  flex-column">
                                <h3 class="mb-auto card-text font-weight-bolder mb-2"><?= $f['judul']; ?></h3>
                                <button class="btn btn-outline-warning mb-4 my-2 my-sm-0 " type="submit">Buy</button>
                                <a href="/film/<?= $f['slug']; ?>" style=" margin-bottom: 0 ;" class=" mt-3 text-center button text-white">Read More...</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</div>
<div class="w-100 p-4 " style="background-color: black;">
    <div class="d-flex  justify-content-center text-center">
        <p class="text-white">© Copyright 2020</p>
        &nbsp;
        <p class="text-warning pr-4 pl-4">|</p>
        &nbsp;
        <p class="text-white">Muflikhah Isna</p>
        &nbsp;
        <p class="text-warning pr-4 pl-4">|</p>
        &nbsp;
        <p class="text-white">Yogyakarta</p>
    </div>
</div>
<?= $this->endSection(); ?>