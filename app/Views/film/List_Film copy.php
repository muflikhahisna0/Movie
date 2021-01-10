<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
	<div class="row">
		<div class="col">
			<h1>List Film</h1>
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Film</th>
						<th scope="col">Read More..</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($film as $f) : ?>
						<tr>
							<td class="text-center"><?= $f['judul']; ?></td>
							<td class="text-center"><a href="/film/<?= $f['slug']; ?>" class="btn btn-success">Read More...</a></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?= $this->endSection(); ?>