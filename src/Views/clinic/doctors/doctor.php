<div class="container">
    <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb" class="fw-bold my-4 h4">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a class="text-decoration-none" href="index.php?page=doctors">Doctors</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                <?php echo htmlspecialchars($doctor['name']); ?>
            </li>
        </ol>
    </nav>

    <div class="d-flex flex-column gap-3 details-card doctor-details">
        <div class="details d-flex gap-2 align-items-center">
            <img
                src="src/Views/clinic/assets/images/<?php echo htmlspecialchars($doctor['image_url'] ?? 'major.jpg'); ?>"
                alt="doctor"
                class="img-fluid rounded-circle"
                height="150"
                width="150"
            />
            <div class="details-info d-flex flex-column gap-3">
                <h4 class="card-title fw-bold"><?php echo htmlspecialchars($doctor['name']); ?></h4>
                <h6 class="card-title fw-bold"><?php echo htmlspecialchars($doctor['major']); ?></h6>
                <p class="text-muted"><?php echo htmlspecialchars($doctor['summary'] ?? 'No summary available.'); ?></p>
            </div>
        </div>
        <hr />

        <form method="POST" action="index.php?page=book_appointment">
            <input type="hidden" name="doctor_id" value="<?php echo $doctor['id']; ?>">

            <div class="form-items">
                <div class="mb-3">
                    <label class="form-label required-label" for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required />
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="phone">Phone</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required />
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required />
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Confirm Booking</button>
        </form>
    </div>
</div>
