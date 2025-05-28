<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VCare - Medical Services</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #0066cc;
            --light-blue: #e8f4ff;
            --text-dark: #333;
            --border-radius: 12px;
            --shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        .bg-blue {
            background: linear-gradient(135deg, var(--primary-blue), #0052a3);
        }

        .hero-section {
            min-height: 400px;
            display: flex;
            align-items: center;
        }

        .hero-content h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .hero-image {
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .hero-image:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .section-title {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--text-dark);
            margin: 3rem 0 2rem;
            text-transform: capitalize;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: var(--primary-blue);
            border-radius: 2px;
        }

        .card {
            border: none;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            transition: var(--transition);
            overflow: hidden;
            height: 100%;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
        }

        .card-img-circle {
            width: 120px;
            height: 120px;
            object-fit: cover;
            margin: 1rem auto;
            border: 4px solid var(--light-blue);
            transition: var(--transition);
        }

        .card:hover .card-img-circle {
            border-color: var(--primary-blue);
            transform: scale(1.05);
        }

        .card-title {
            font-size: 1.25rem;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }

        .card-subtitle {
            color: #666;
            font-size: 0.95rem;
            margin-bottom: 1rem;
        }

        .btn-primary-custom {
            background: var(--primary-blue);
            border: 2px solid var(--primary-blue);
            color: white;
            padding: 0.6rem 1.5rem;
            border-radius: 25px;
            font-weight: 600;
            transition: var(--transition);
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary-custom:hover {
            background: transparent;
            color: var(--primary-blue);
            transform: translateY(-2px);
        }

        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .features-section {
            background: var(--light-blue);
            padding: 4rem 0;
            margin: 4rem 0;
        }

        .feature-card {
            background: white;
            padding: 2rem;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            text-align: center;
            transition: var(--transition);
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            margin-bottom: 1.5rem;
            filter: brightness(0) saturate(100%) invert(27%) sepia(94%) saturate(1654%) hue-rotate(201deg);
        }

        .app-download {
            background: var(--primary-blue);
            color: white;
            padding: 3rem 0;
            margin-top: 4rem;
        }

        .app-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 2rem;
        }

        .app-btn {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.3);
            color: white;
            padding: 0.8rem 1.5rem;
            border-radius: var(--border-radius);
            text-decoration: none;
            transition: var(--transition);
        }

        .app-btn:hover {
            background: white;
            color: var(--primary-blue);
            transform: translateY(-2px);
        }

        .app-btn img {
            width: 24px;
            height: 24px;
        }

        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2rem;
            }

            .section-title {
                font-size: 1.8rem;
            }

            .cards-grid {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 1.5rem;
            }
        }

        .loading-skeleton {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
        }

        @keyframes loading {
            0% {
                background-position: 200% 0;
            }

            100% {
                background-position: -200% 0;
            }
        }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <section class="bg-blue text-white">
        <div class="container hero-section">
            <div class="row align-items-center g-4">
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="hero-content">
                        <h1>Have a Medical Question?</h1>
                        <p class="lead mb-4">
                            Get expert medical advice from qualified professionals.
                            Book appointments, consultations, and access comprehensive healthcare services.
                        </p>
                        <a href="#doctors" class="btn btn-light btn-lg px-4 py-2">
                            <i class="fas fa-stethoscope me-2"></i>Find a Doctor
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1">
                    <img src="../src/Views/clinic/assets/images/banner.jpg"
                        class="img-fluid hero-image"
                        alt="Medical consultation banner"
                        loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <main class="container">
        <!-- Medical Specialties Section -->
        <section id="specialties" class="py-5">
            <h2 class="section-title text-center">Medical Specialties</h2>

            <div class="cards-grid" id="specialties-grid">
                <!-- PHP Loop for Specialties -->
                <?php while ($row = $specialty->fetch_assoc()) { ?>
                    <div class="card specialty-card">
                        <?php
                        $image = $row['image_url'] ?? '/assets/images/major.jpg';
                        ?>
                        <img src="../src/Views/clinic/assets/images/<?php echo htmlspecialchars($image); ?>"
                            class="card-img-top rounded-circle card-img-circle"
                            alt="<?php echo htmlspecialchars($row['name']); ?> specialty"
                            loading="lazy"
                            onerror="this.src='../src/Views/clinic/assets/images/major.jpg'">

                        <div class="card-body text-center">
                            <h4 class="card-title"><?php echo htmlspecialchars($row['name']); ?></h4>
                            <a href="index.php?page=doctors&major_id=<?php echo $row['id']; ?>"
                                class="btn-primary-custom"
                                aria-label="Browse doctors in <?php echo htmlspecialchars($row['name']); ?>">
                                <i class="fas fa-user-md me-2"></i>Browse Doctors
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>

        <!-- Doctors Section -->
        <section id="doctors" class="py-5">
            <h2 class="section-title text-center">Our Doctors</h2>

            <div class="cards-grid" id="doctors-grid">
                <!-- PHP Loop for Doctors -->
                <?php while ($row = $doctors->fetch_assoc()) { ?>
                    <div class="card doctor-card">
                        <img src="../src/Views/clinic/assets/images/<?php echo htmlspecialchars($row['image_url'] ?? '/assets/images/major.jpg'); ?>"
                            class="card-img-top rounded-circle card-img-circle"
                            alt="Dr. <?php echo htmlspecialchars($row['name']); ?>"
                            loading="lazy"
                            onerror="this.src='../src/Views/clinic/assets/images/major.jpg'">

                        <div class="card-body text-center">
                            <h4 class="card-title">Dr. <?php echo htmlspecialchars($row['name']); ?></h4>
                            <?php if (!empty($row['major'])): ?>
                                <p class="card-subtitle"><?php echo htmlspecialchars($row['major']); ?></p>
                            <?php endif; ?>
                            <a href="index.php?page=doctor&id=<?php echo $row['id']; ?>"
                                class="btn-primary-custom"
                                aria-label="Book appointment with Dr. <?php echo htmlspecialchars($row['name']); ?>">
                                <i class="fas fa-calendar-plus me-2"></i>Book Appointment
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
    </main>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <h2 class="section-title text-center">Why Choose VCare?</h2>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                            alt="Comprehensive Care" class="feature-icon" loading="lazy">
                        <h4>Comprehensive Care</h4>
                        <p>Everything you need is found at VCare. Complete medical services under one roof.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                            alt="Easy Booking" class="feature-icon" loading="lazy">
                        <h4>Easy Booking</h4>
                        <p>Book appointments in hospitals, clinics, home visits or phone consultations effortlessly.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                            alt="Medicine Delivery" class="feature-icon" loading="lazy">
                        <h4>Medicine Delivery</h4>
                        <p>Order medicines and get them delivered to your doorstep quickly and safely.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                            alt="Surgery Booking" class="feature-icon" loading="lazy">
                        <h4>Surgery Booking</h4>
                        <p>Schedule surgical procedures with qualified surgeons and modern facilities.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Lazy loading and performance optimizations
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Loading animation for cards
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe all cards
            document.querySelectorAll('.card').forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(card);
            });
        });
    </script>