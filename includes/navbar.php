<?php 
    $currentPage = basename($_SERVER['PHP_SELF']);
?>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Библиотека</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Home -->
                <li class="nav-item">
                    <a class="nav-link <?= $currentPage === 'index.php' ? 'active' : '' ?>" aria-current="page" href="index.php">Начало</a>
                </li>

                <!-- Authors -->
                <li class="nav-item">
                    <a class="nav-link <?= $currentPage == 'authors.php' ? 'active' : '' ?>" aria-current="page" href="authors.php">Автори</a>
                </li>

                <!-- Publishers -->
                <li class="nav-item">
                    <a class="nav-link <?= $currentPage == 'publishers.php' ? 'active' : '' ?>" aria-current="page" href="publishers.php">Издателства</a>
                </li>

                <!-- Genres -->
                <li class="nav-item">
                    <a class="nav-link <?= $currentPage == 'genres.php' ? 'active' : '' ?>" aria-current="page" href="genres.php">Жанрове</a>
                </li>

                <!-- Readers -->
                <li class="nav-item">
                    <a class="nav-link <?= $currentPage == 'readers.php' ? 'active' : '' ?>" aria-current="page" href="readers.php">Читатели</a>
                </li>

                <!-- Books -->
                <li class="nav-item">
                    <a class="nav-link <?= $currentPage == 'books.php' ? 'active' : '' ?>" aria-current="page" href="books.php">Книги</a>
                </li>
            </ul>
        </div>
    </div>
</nav>