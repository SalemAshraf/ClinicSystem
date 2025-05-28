<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /* Only footer styles - no body/website background changes */
        .footer-simple {
            background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
            color: white;
            padding: 3rem 0 1rem 0;
            margin-top: 0rem;
        }

        .footer-section {
            padding: 1rem;
        }

        .footer-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #ecf0f1;
        }

        .footer-text {
            color: rgba(255, 255, 255, 0.85);
            line-height: 1.6;
            font-size: 0.9rem;
        }

        .footer-links {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .footer-link {
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            padding: 0.4rem 0.8rem;
            border-radius: 5px;
            transition: all 0.3s ease;
            font-size: 0.9rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .footer-link:hover {
            color: white;
            background-color: rgba(255, 255, 255, 0.1);
            transform: translateY(-1px);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            padding-top: 1rem;
            margin-top: 2rem;
            text-align: center;
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.85rem;
        }

        @media (max-width: 768px) {
            .footer-links {
                justify-content: center;
            }
            
            .footer-section {
                text-align: center;
                margin-bottom: 1rem;
            }
        }

    </style>
</head>
<body>

    <!-- Simple Footer -->
    <footer class="footer-simple">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-section">
                        <h3 class="footer-title">About Us</h3>
                        <p class="footer-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nesciunt repellendus itaque,
                            laborum saepe enim maxime, delectus, dicta cumque error cupiditate nobis officia quam 
                            perferendus consequatur cum iure quod facere.
                        </p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="footer-section">
                        <h3 class="footer-title">Links</h3>
                        <div class="footer-links">
                            <a href="./index.html" class="footer-link">Home</a>
                            <a href="./majors.html" class="footer-link">Majors</a>
                            <a href="./doctors/index.html" class="footer-link">Doctors</a>
                            <a href="./login.html" class="footer-link">Login</a>
                            <a href="./register.html" class="footer-link">Register</a>
                            <a href="./contact.html" class="footer-link">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <div class="container">
                    © 2024 Your Website. All rights reserved.
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"></script>
</body>
</html>