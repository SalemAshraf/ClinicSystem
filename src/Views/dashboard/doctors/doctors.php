<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid my-2">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Doctors</h1>
				</div>
				<div class="col-sm-6 text-right">
					<a href="index.php?page=admin_doctors_create" class="btn btn-primary">New Doctor</a>
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
								<input type="text" name="search" class="form-control float-right" placeholder="Search doctor">
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
								<th>ID</th>
								<th>Name</th>
								<th>Email</th>
								<th>Specialty</th>
								<th>Bio</th>
								<th>Photo</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($doctors as $doctor): ?>
								<tr>
									<td><?= $doctor['id'] ?></td>
									<td><?= htmlspecialchars($doctor['name']) ?></td>
									<td><?= htmlspecialchars($doctor['email']) ?></td>
									<td><?= htmlspecialchars($doctor['specialty_name']) ?></td>
									<td><?= htmlspecialchars($doctor['bio']) ?></td>
									<td>
										<?php if ($doctor['image_url']): ?>
											<img src="<?= htmlspecialchars($doctor['image_url']) ?>" width="50" height="50" class="rounded-circle" alt="doctor photo">
										<?php else: ?>
											<span class="text-muted">No Photo</span>
										<?php endif; ?>
									</td>
									<td>
										<a href="index.php?page=admin_doctors_edit&id=<?= $doctor['id'] ?>" class="btn btn-sm btn-info">Edit</a>
										<a href="index.php?page=admin_doctors_delete&id=<?= $doctor['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
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
