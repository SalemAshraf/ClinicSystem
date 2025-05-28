<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid my-2">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Specialties</h1>
				</div>
				<div class="col-sm-6 text-right">
					<a href="index.php?page=admin_specialties_create" class="btn btn-primary">New Specialty</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-header">
					<div class="card-tools">
						<form method="GET" action="">
							<div class="input-group" style="width: 250px;">
								<input type="text" name="search" class="form-control float-right" placeholder="Search">
								<div class="input-group-append">
									<button type="submit" class="btn btn-default">
										<i class="fas fa-search"></i>
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="card-body table-responsive p-0">
					<table class="table table-hover text-nowrap">
						<thead>
							<tr>
								<th width="60">ID</th>
								<th>Name</th>
								<th>Slug</th>
								<th width="150">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($specialties as $specialty): ?>
								<tr>
									<td><?= $specialty['id'] ?></td>
									<td><?= htmlspecialchars($specialty['name']) ?></td>
									<td><?= htmlspecialchars($specialty['description']) ?></td>
									<td>
										<a href="index.php?page=admin_specialties_edit&id=<?= $specialty['id'] ?>" class="btn btn-sm btn-info">Edit</a>
										<a href="index.php?page=admin_specialties_delete&id=<?= $specialty['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>

									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
</div>