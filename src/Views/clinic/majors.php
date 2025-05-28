<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majors Grid - Backend Implementation</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .majors-section {
            padding: 3rem 0;
            background-color: #f8f9fa;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            color: #2c3e50;
            font-weight: 700;
            font-size: 2.5rem;
        }

        .majors-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            padding: 1rem;
        }

        .major-card {
            background: white;
            border: none;
            border-radius: 20px;
            padding: 2rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .major-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #3498db, #2ecc71, #e74c3c, #f39c12);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .major-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        .major-card:hover::before {
            opacity: 1;
        }

        .card-image-wrapper {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .card-image-circle {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border: 4px solid #e9ecef;
            transition: all 0.3s ease;
            margin: 0 auto;
            display: block;
        }

        .major-card:hover .card-image-circle {
            border-color: #3498db;
            transform: scale(1.05);
        }

        .card-title {
            color: #2c3e50;
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            min-height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-button {
            border: 2px solid #3498db;
            color: #3498db;
            font-weight: 500;
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .card-button:hover {
            background-color: #3498db;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(52, 152, 219, 0.3);
        }

        /* Empty state styling */
        .no-majors {
            text-align: center;
            padding: 3rem;
            color: #6c757d;
        }

        .no-majors i {
            font-size: 3rem;
            margin-bottom: 1rem;
            opacity: 0.5;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .majors-grid {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 1.5rem;
                padding: 0.5rem;
            }
            
            .major-card {
                padding: 1.5rem;
            }
            
            .section-title {
                font-size: 2rem;
                margin-bottom: 2rem;
            }
        }

        /* Loading animation */
        .major-card {
            animation: fadeInUp 0.6s ease forwards;
            opacity: 0;
            transform: translateY(30px);
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container majors-section">
        <h2 class="section-title">Medical Specialties</h2>
        
        <!-- Your Backend Implementation -->
        <div class="majors-grid">
            <?php if ($specialty && $specialty->num_rows > 0): ?>
                <?php $count = 0; ?>
                <?php while ($row = $specialty->fetch_assoc()): ?>
                    <?php $count++; ?>
                    <div class="major-card" style="animation-delay: <?php echo $count * 0.1; ?>s;">
                        <div class="card-image-wrapper">
                            <?php
                            $image = $row['image_url'] ?? 'major.jpg';
                            ?>
                            <img src="../src/Views/clinic/assets/images/<?php echo htmlspecialchars($image); ?>" 
                                 class="card-img-top rounded-circle card-image-circle" 
                                 alt="<?php echo htmlspecialchars($row['name']); ?>"
                                 onerror="this.src='../src/Views/clinic/assets/images/major.jpg'">
                        </div>
                        
                        <div class="card-body d-flex flex-column gap-1 justify-content-center">
                            <h4 class="card-title"><?php echo htmlspecialchars($row['name']); ?></h4>
                            <a href="index.php?page=doctors&major_id=<?php echo $row['id']; ?>" 
                               class="btn card-button">Browse Doctors</a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="col-12">
                    <div class="no-majors">
                        <i class="fas fa-stethoscope"></i>
                        <h3>No Medical Specialties Available</h3>
                        <p>Please check back later or contact support.</p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</body>
</html>