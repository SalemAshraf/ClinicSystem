<div class="majors-grid">
<?php while ($row = $specialty->fetch_assoc()) { ?>
            <div class="card p-2" style="width: 18rem;">
                <?php
                $image = $row['image_url'] ?? '/assets/images/major.jpg';
                ?>
                <img src="../src/Views/clinic/assets/images/<?php echo htmlspecialchars($image); ?>" class="card-img-top rounded-circle card-image-circle" alt="major">

                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center"><?php echo htmlspecialchars($row['name']); ?></h4>
                    <a href="index.php?page=doctors&major_id=<?php echo $row['id']; ?>" class="btn btn-outline-primary card-button">Browse Doctors</a>

                </div>
            </div>
        <?php } ?>
</div>
