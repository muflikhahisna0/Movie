<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid h-100 text-white" style="background-color: black; min-height: 680px;">
    <div class="row">
        <div class="col-4" style="height: 700px;">
            <img src="/img/input1.jpg" alt="poto" style="max-height: 100%; ">
        </div>
        <div class="col m-4">
            <div class="card m-4 p-4 border-warning " style="border-radius:20px;border-width: 3px; background-color: #000000d1; box-shadow: 0px 0px 20px 2px #ffc107">
                <h1 class="text-warning">Update Movie</h1>
                <form action="/film/update/<?= $film['id']; ?>" method="post">
                    <?php csrf_field(); ?>
                    <input type="hidden" name="slug" value="<?= $film['slug']; ?>">
                    <div class="form-group">
                        <label for="inputFilm">Film Update Data</label>
                        <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="inputFilm" placeholder="Film Title.." value="<?= $film['judul']; ?>" name="judul">
                        <div class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSutradara">Director</label>
                        <input type="text" class="form-control  <?= ($validation->hasError('sutradara')) ? 'is-invalid' : ''; ?>" id="inputSutradara" placeholder="Mr./Mrs. Director .." value="<?= $film['sutradara']; ?>" name="sutradara">
                        <div class="invalid-feedback">
                            <?= $validation->getError('sutradara'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSynopsis">Synopsis </label>
                        <textarea class="form-control  <?= ($validation->hasError('synopsis')) ? 'is-invalid' : ''; ?>" id="inputSynopsis" placeholder="Synopsis.." value="<?= $film['synopsis']; ?>" name="synopsis" rows="4"></textarea>
                        <div class="invalid-feedback">
                            <?= $validation->getError('synopsis'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputCover">Cover</label>
                        <input type="text" class="form-control  <?= ($validation->hasError('cover')) ? 'is-invalid' : ''; ?>" id="inputCover" placeholder=".jpg .png .jpeg , etc" value="<?= $film['cover']; ?>" name="cover">
                        <div class="invalid-feedback">
                            <?= $validation->getError('cover'); ?>
                        </div>
                    </div>
                    <div class="row justify-content-between p-4">
                        <button type="submit" class="button">Update</button>
                        <a href="/film/" type="submit" class="button">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>