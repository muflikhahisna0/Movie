<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid text-white" style="background-image: url('/img/b.jpg'); background-size: contain;">
	<div class="row content-list  d-flex flex-column">
		<div class="col p-2">
			<div id="carouselExampleCaptions mt-4" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="/img/carousel.png" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<br><br><br><br>
							<h1 class="movie-title text-white"><strong>MOVIE TIME</strong></h1>
							<p>Welcome to the luxury cinema.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="/img/carousel.png" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h1 class="movie-title text-white"><strong>SPECIAL PRICE</strong></h1>
							<p>Get special price every sunday for more than 2 tickets.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="/img/carousel.png" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h1 class="movie-title text-white"><strong>FINEST OF THE FINE</strong></h1>
							<p>Luxury cinemas will make your day.</p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<div class="col p-4 mt-4">
			<div class="row p-4">
				<div class="button text-white mr-4 font-weight-bold">BUY TICKETS</div>
				<div class="button text-white mr-4 font-weight-bold">PRE-ORDER SNACKS</div>
				<div class="button text-white mr-4 font-weight-bold">VIEW SHOWTIME</div>
			</div>
			<br>
			<h1>NOW SHOWING</h1>
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

				<?php foreach (array_slice($film, 0, 4) as $f) : ?>
					<div class="col ">
						<div class="mt-4 card border-warning" style="width: 14.5rem; background-color: black; height:300px">
							<div class="bg-light" style="height: 140px;">
								<img src="/img/<?= $f['cover']; ?>" class="card-img-top" alt="..." style="max-height: 100%; display: block;">
							</div>
							<div class="card-body d-flex  flex-column">
								<p class="mb-auto card-text font-weight-bolder"><?= $f['judul']; ?></p>
								<a href="/film/<?= $f['slug']; ?>" style="bottom:0; margin-bottom: 0 ;" class="button text-white">Read More...</a>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
				<div class="col ">
					<div class="mt-4 card" style="width: 14.5rem; height:300px; background-color: rgb(255 0 0 / 0%);">
						<div class="" style="height: 140px; background-color: rgb(255 0 0 / 0%);">
						</div>
						<div class="card-body d-flex  flex-column">
							<div class="col mt-4"></div>
							<a href="/film/movie" class="button text-white font-weight-bold">SHOW MORE</a>
						</div>
					</div>
				</div>
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