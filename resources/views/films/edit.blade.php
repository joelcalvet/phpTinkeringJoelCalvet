<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Film</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Disseny general i colors */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #121212;
            color: #ffffff;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Navbar fixa */
        .navbar {
            background-color: #1f1f1f;
            color: #f8f9fa;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            padding: 8px 0;
        }

        .navbar-brand, .nav-link {
            color: #f8f9fa !important;
            font-size: 1rem;
        }

        .navbar-brand:hover, .nav-link:hover {
            color: #f96b00 !important;
        }

        /* Ajust de margin per evitar superposició amb la navbar */
        .main-container {
            margin-top: 60px;
            background-color: #1e1e1e;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 700px;
            text-align: center;
        }

        /* Títol de la pàgina */
        h1 {
            color: #f8f9fa;
            font-size: 2rem;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Estil per a la secció dels inputs */
        .form-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .form-label {
            flex: 1;
            text-align: left;
            color: #f8f9fa;
        }

        .form-input {
            flex: 2;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #2a2a2a;
            color: #f8f9fa;
        }

        /* Botons personalitzats */
        .btn-custom {
            background-color: #f96b00;
            border: none;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 30px;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .btn-custom:hover {
            background-color: #d85f00;
        }

        /* Footer sempre a la part inferior */
        footer {
            background-color: #1f1f1f;
            color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
            margin-top: auto;
            width: 100%;
        }
    </style>
</head>
<body>

<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand mx-2" href="#">Projecte MVC</a>
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

<!-- Contingut Principal -->
<div class="main-container">
    <h1>Edita la Pel·lícula</h1>
    <form action="/update" method="POST">
        <input type="hidden" name="id" value="<?= htmlspecialchars($film->id) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2">

        <div class="form-group">
            <label for="name" class="form-label">Títol:</label>
            <input type="text" id="name" name="name" value="<?= htmlspecialchars($film->name) ?>" class="form-input" required>
        </div>

        <div class="form-group">
            <label for="director" class="form-label">Director:</label>
            <input type="text" id="director" name="director" value="<?= htmlspecialchars($film->director) ?>" class="form-input" required>
        </div>

        <div class="form-group">
            <label for="year" class="form-label">Any:</label>
            <input type="number" id="year" name="year" value="<?= htmlspecialchars($film->year) ?>" class="form-input" required>
        </div>

        <button type="submit" class="btn-custom">Editar</button>
    </form>
    <a href="/films" class="text-gray-500 hover:underline mt-4 block">Torna</a>
</div>

<!-- Footer -->
<footer>
    <p>&copy; 2024 Creat per Joel Calvet Michavila. Tots els drets reservats.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
