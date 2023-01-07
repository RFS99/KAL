<section class="bg-light">
	<div class="dlandadd text-center mb-5">
		<h3>Delete Anime</h3>
	</div>
	<!-- search section start -->
	<div class="card container">
		<div class="card-body ">
			<div class="container">
				<br>
				<br>
				<table border="1" class="table table-striped text-dark">
					<thead class="thead-dark">
						<tr>
							<th>No</th>
							<th>Judul Anime</th>
							<th>Acton</th>
						</tr>
					</thead>
					<tbody>

						<?php
						$no = 1;

						if (isset($all_anime)) {
							foreach ($all_anime as $data) :
						?>

						<tr>
							<td><?= $no++; ?></td>
							<td><?= $data['anime_title'] ?></td>
							<td>
								<button id="btn-submit" type="button" data-id="<?= $data['anime_id'] ?>" data-name="<?= $data['anime_title'] ?>" data-uri="<?= base_url('register/delete') ?>" class="btn btn-danger btn-sm rounded-0 btn-delete">
									<i class="fa fa-trash"></i>
								</button>
							</td>
						</tr>
						<?php
							endforeach;
							?>
						<?php
						}
						?>
					</tbody>

				</table>
			</div>
		</div>
	</div>

	<!-- search section end -->
</section>
