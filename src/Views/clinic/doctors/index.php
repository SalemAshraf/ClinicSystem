<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Doctors</li>
        </ol>
    </nav>

    <div class="doctors-grid d-flex flex-wrap gap-4 justify-content-center">
        <?php while ($row = $doctors->fetch_assoc()) { ?>
            <div class="card p-2" style="width: 18rem;">
                <img src="../src/Views/clinic/assets/images/<?php echo htmlspecialchars($row['image_url'] ?? '/assets/images/major.jpg'); ?>" class="card-img-top rounded-circle card-image-circle" alt="doctor">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center"><?php echo htmlspecialchars($row['name']); ?></h4>
                    <h6 class="card-title fw-bold text-center"><?php echo htmlspecialchars($row['major'] ?? ''); ?></h6>
                    <a href="index.php?page=doctor&id=<?php echo $row['id']; ?>" class="btn btn-outline-primary card-button">View Profile</a>
                </div>
            </div>
        <?php } ?>
    </div>

    <nav class="mt-5" aria-label="navigation">
        <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
        </ul>
    </nav>
</div>
