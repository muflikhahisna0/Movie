<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <form action="/film/save/" method="post">
                <?php csrf_field(); ?>
                <div class="form-group">
                    <label for="inputFilm">Judul Film</label>
                    <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="inputFilm" placeholder="Judul Film.." name="judul">
                    <div class="invalid-feedback">
                        <?= $validation->getError('judul'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputSutradara">Director</label>
                    <input type="text" class="form-control  <?= ($validation->hasError('sutradara')) ? 'is-invalid' : ''; ?>" id="inputSutradara" placeholder="Mr./Mrs. Director .." name="sutradara">
                    <div class="invalid-feedback">
                        <?= $validation->getError('sutradara'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputSynopsis">Synopsis </label>
                    <input type="text" class="form-control  <?= ($validation->hasError('synopsis')) ? 'is-invalid' : ''; ?>" id="inputSynopsis" placeholder="Synopsis.." name="synopsis">
                    <div class="invalid-feedback">
                        <?= $validation->getError('synopsis'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputCover">Cover</label>
                    <input type="text" class="form-control  <?= ($validation->hasError('cover')) ? 'is-invalid' : ''; ?>" id="inputCover" placeholder=".jpg .png .jpeg , etc" name="cover">
                    <div class="invalid-feedback">
                        <?= $validation->getError('cover'); ?>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>