<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Details - VCare</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #0066cc;
            --light-blue: #e8f4ff;
            --success-green: #28a745;
            --text-dark: #333;
            --text-muted: #6c757d;
            --border-color: #e9ecef;
            --border-radius: 12px;
            --shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            --shadow-hover: 0 8px 25px rgba(0, 0, 0, 0.15);
            --transition: all 0.3s ease;
        }

        body {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            max-width: 900px;
        }

        /* Enhanced Breadcrumb */
        .breadcrumb {
            background: white;
            padding: 1rem 1.5rem;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            margin-bottom: 2rem;
        }

        .breadcrumb-item a {
            color: var(--primary-blue);
            transition: var(--transition);
            font-weight: 500;
        }

        .breadcrumb-item a:hover {
            color: #0052a3;
            text-decoration: underline !important;
        }

        .breadcrumb-item.active {
            color: var(--text-dark);
            font-weight: 600;
        }

        .breadcrumb-item + .breadcrumb-item::before {
            content: var(--bs-breadcrumb-divider, ">");
            color: var(--text-muted);
            font-weight: bold;
        }

        /* Doctor Details Card */
        .doctor-details {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            padding: 2rem;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .doctor-details::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-blue), #0052a3);
        }

        .doctor-details:hover {
            box-shadow: var(--shadow-hover);
            transform: translateY(-2px);
        }

        /* Doctor Info Section */
        .details {
            margin-bottom: 2rem;
        }

        .doctor-image {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border: 4px solid var(--light-blue);
            transition: var(--transition);
            box-shadow: var(--shadow);
        }

        .doctor-image:hover {
            border-color: var(--primary-blue);
            transform: scale(1.05);
        }

        .details-info h4 {
            color: var(--text-dark);
            font-size: 1.75rem;
            margin-bottom: 0.5rem;
            position: relative;
        }

        .details-info h4::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--primary-blue);
            border-radius: 2px;
        }

        .details-info h6 {
            color: var(--primary-blue);
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .details-info p {
            color: var(--text-muted);
            line-height: 1.6;
            font-size: 0.95rem;
        }

        /* Enhanced HR */
        hr {
            border: none;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--border-color), transparent);
            margin: 2rem 0;
        }

        /* Form Styling */
        .form-items {
            margin-bottom: 2rem;
        }

        .form-label {
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }

        .required-label::after {
            content: ' *';
            color: #dc3545;
            font-weight: bold;
        }

        .form-control {
            border: 2px solid var(--border-color);
            border-radius: 8px;
            padding: 0.75rem 1rem;
            font-size: 0.95rem;
            transition: var(--transition);
            background: #fafafa;
        }

        .form-control:focus {
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 0.2rem rgba(0, 102, 204, 0.15);
            background: white;
            transform: translateY(-1px);
        }

        .form-control:hover {
            border-color: #b3d9ff;
            background: white;
        }

        /* Enhanced Submit Button */
        .btn-primary {
            background: linear-gradient(135deg, var(--primary-blue), #0052a3);
            border: none;
            padding: 0.75rem 2rem;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 25px;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: var(--transition);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 102, 204, 0.3);
            background: linear-gradient(135deg, #0052a3, var(--primary-blue));
        }

        .btn-primary:hover::before {
            left: 100%;
        }

        .btn-primary:active {
            transform: translateY(0);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .details {
                flex-direction: column;
                text-align: center;
                gap: 1.5rem !important;
            }

            .details-info {
                align-items: center;
            }

            .details-info h4::after {
                left: 50%;
                transform: translateX(-50%);
            }

            .doctor-details {
                padding: 1.5rem;
            }

            .container {
                padding: 0 1rem;
            }
        }

        /* Loading Animation */
        .form-control.loading {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
        }

        @keyframes loading {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }

        /* Success States */
        .form-control.valid {
            border-color: var(--success-green);
            background: #f8fff9;
        }

        .form-control.invalid {
            border-color: #dc3545;
            background: #fff8f8;
        }

        /* Icon Enhancements */
        .details-info::before {
            content: '\f0f0';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            top: -10px;
            right: -10px;
            color: var(--light-blue);
            font-size: 2rem;
            opacity: 0.3;
        }

        .details {
            position: relative;
        }
    </style>
</head>
<body>
    <div class="container py-4">
        <!-- Enhanced Breadcrumb -->
        <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb" class="fw-bold h5">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item">
                    <a class="text-decoration-none" href="index.php">
                        <i class="fas fa-home me-1"></i>Home
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a class="text-decoration-none" href="index.php?page=doctors">
                        <i class="fas fa-user-md me-1"></i>Doctors
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <i class="fas fa-stethoscope me-1"></i>
                    <?php echo htmlspecialchars($doctor['name']); ?>
                </li>
            </ol>
        </nav>

        <!-- Enhanced Doctor Details Card -->
        <div class="d-flex flex-column gap-3 details-card doctor-details">
            <div class="details d-flex gap-4 align-items-center">
                <img
                    src="../src/Views/clinic/assets/images/<?php echo htmlspecialchars($doctor['image_url'] ?? 'major.jpg'); ?>"
                    alt="<?php echo htmlspecialchars($doctor['name']); ?>"
                    class="img-fluid rounded-circle doctor-image"
                    height="150"
                    width="150"
                    loading="lazy"
                    onerror="this.src='src/Views/clinic/assets/images/major.jpg'"
                />
                <div class="details-info d-flex flex-column gap-3">
                    <h4 class="card-title fw-bold">
                        <?php echo htmlspecialchars($doctor['name']); ?>
                    </h4>
                    <h6 class="card-title fw-bold">
                        <i class="fas fa-user-graduate me-2"></i>
                        <?php echo htmlspecialchars($doctor['major']); ?>
                    </h6>
                    <p class="text-muted">
                        <i class="fas fa-info-circle me-2"></i>
                        <?php echo htmlspecialchars($doctor['summary'] ?? 'No summary available.'); ?>
                    </p>
                </div>
            </div>
            
            <hr />

            <!-- Enhanced Booking Form -->
            <form method="POST" action="index.php?page=book_appointment" id="bookingForm">
                <input type="hidden" name="doctor_id" value="<?php echo $doctor['id']; ?>">

                <div class="row">
                    <div class="col-12 mb-4">
                        <h5 class="text-center mb-3" style="color: var(--primary-blue);">
                            <i class="fas fa-calendar-check me-2"></i>
                            Book Your Appointment
                        </h5>
                    </div>
                </div>

                <div class="form-items">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label required-label" for="name">
                                <i class="fas fa-user me-2"></i>Full Name
                            </label>
                            <input 
                                type="text" 
                                class="form-control" 
                                id="name" 
                                name="name" 
                                placeholder="Enter your full name"
                                required 
                            />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label required-label" for="phone">
                                <i class="fas fa-phone me-2"></i>Phone Number
                            </label>
                            <input 
                                type="tel" 
                                class="form-control" 
                                id="phone" 
                                name="phone" 
                                placeholder="Enter your phone number"
                                required 
                            />
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label required-label" for="email">
                            <i class="fas fa-envelope me-2"></i>Email Address
                        </label>
                        <input 
                            type="email" 
                            class="form-control" 
                            id="email" 
                            name="email" 
                            placeholder="Enter your email address"
                            required 
                        />
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-calendar-plus me-2"></i>
                        Confirm Booking
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('bookingForm');
            const inputs = form.querySelectorAll('input[required]');

            // Add real-time validation
            inputs.forEach(input => {
                input.addEventListener('blur', function() {
                    validateField(this);
                });

                input.addEventListener('input', function() {
                    if (this.classList.contains('invalid')) {
                        validateField(this);
                    }
                });
            });

            // Form submission handling
            form.addEventListener('submit', function(e) {
                let isValid = true;
                
                inputs.forEach(input => {
                    if (!validateField(input)) {
                        isValid = false;
                    }
                });

                if (!isValid) {
                    e.preventDefault();
                    showNotification('Please fill in all required fields correctly.', 'error');
                }
            });

            function validateField(field) {
                const value = field.value.trim();
                let isValid = true;

                // Remove previous validation classes
                field.classList.remove('valid', 'invalid');

                if (!value) {
                    isValid = false;
                } else {
                    switch (field.type) {
                        case 'email':
                            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                            isValid = emailRegex.test(value);
                            break;
                        case 'tel':
                            const phoneRegex = /^[\+]?[1-9][\d]{0,15}$/;
                            isValid = phoneRegex.test(value.replace(/\s/g, ''));
                            break;
                        case 'text':
                            isValid = value.length >= 2;
                            break;
                    }
                }

                field.classList.add(isValid ? 'valid' : 'invalid');
                return isValid;
            }

            function showNotification(message, type) {
                // Simple notification system
                const notification = document.createElement('div');
                notification.className = `alert alert-${type === 'error' ? 'danger' : 'success'} position-fixed`;
                notification.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px;';
                notification.textContent = message;
                
                document.body.appendChild(notification);
                
                setTimeout(() => {
                    notification.remove();
                }, 5000);
            }

            // Add smooth entrance animation
            const doctorCard = document.querySelector('.doctor-details');
            doctorCard.style.opacity = '0';
            doctorCard.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                doctorCard.style.transition = 'all 0.6s ease';
                doctorCard.style.opacity = '1';
                doctorCard.style.transform = 'translateY(0)';
            }, 100);
        });
    </script>
</body>
</html>