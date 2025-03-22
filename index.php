<?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pushpaa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">My Website</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.php?page=home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=academics">Academics</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=sports">Sports</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=music">Music</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=charity">Charity</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container mt-4">
        <?php
            if ($page == 'home') {
                echo "<h1>Welcome to Home Page</h1><p>Content for home.</p>";
            } elseif ($page == 'academics') {
                echo "<h1>Academics</h1><p>Information about academics.</p>";
            } elseif ($page == 'sports') {
                echo "<h1>Sports</h1><p>Details about sports activities.</p>";
            } elseif ($page == 'music') {
                echo "<h1>Music</h1><p>All about music programs.</p>";
            } elseif ($page == 'charity') {
                echo "<h1>Charity</h1><p>Charitable events and activities.</p>";
            } else {
                echo "<h1>Page Not Found</h1><p>The page you are looking for does not exist.</p>";
            }
        ?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
