<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page - Projecte MVC</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Disseny bàsic */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #121212;
            color: #ffffff;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Navbar estilitzada */
        .navbar {
            background-color: #1f1f1f;
        }
        .navbar-brand, .nav-link {
            color: #f8f9fa !important;
        }
        .navbar-brand:hover, .nav-link:hover {
            color: #f96b00 !important;
        }

        /* Hero Section */
        .hero-section {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8));
            text-align: center;
            padding: 20px;
        }
        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: #f8f9fa;
        }
        .hero-section p {
            font-size: 1.2rem;
            margin-bottom: 40px;
            color: #b0b0b0;
        }
        .btn-custom {
            padding: 12px 30px;
            font-size: 1rem;
            border-radius: 30px;
            transition: background-color 0.3s ease;
        }
        .btn-primary-custom {
            background-color: #f96b00;
            border: none;
        }
        .btn-primary-custom:hover {
            background-color: #d85f00;
        }
        .btn-secondary-custom {
            background-color: #6c757d;
            border: none;
        }
        .btn-secondary-custom:hover {
            background-color: #5a6268;
        }

        /* Footer sempre a la part inferior */
        footer {
            background-color: #1f1f1f;
            color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
        }
        footer p {
            margin: 0;
            font-size: 0.9rem;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.5rem;
            }
            .hero-section p {
                font-size: 1rem;
            }
            .btn-custom {
                font-size: 0.9rem;
                padding: 10px 25px;
            }
        }

        @media (max-width: 576px) {
            .hero-section h1 {
                font-size: 2rem;
            }
            .hero-section p {
                font-size: 0.9rem;
            }
            .btn-custom {
                font-size: 0.8rem;
                padding: 8px 20px;
            }
        }
    </style>
</head>
<body>

<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Projecte MVC</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Inici</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/films">Pel·lícules</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/metal">Cançons</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Hero Section -->
<section class="hero-section">
    <div class="container text-center">
        <h1>Benvinguts al Projecte MVC</h1>
        <p>Gestiona pel·lícules i cançons de metal de forma ràpida i eficient.</p>
        <div>
            <a href="/films" class="btn btn-custom btn-primary-custom me-3">Pel·lícules</a>
            <a href="/metal" class="btn btn-custom btn-secondary-custom">Cançons Metal</a>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <p>&copy; 2024 Creat per Joel Calvet Michavila. Tots els drets reservats.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
