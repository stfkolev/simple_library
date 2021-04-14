<?php 
    require_once './includes/config.php';

    $errors = [];
    $isRecordSuccessfullyUpdated = false;

    if(isset($_GET['id'])) {
        $id = htmlentities($_GET['id'], ENT_QUOTES, 'UTF-8');
        
        $result = $connection->query("SELECT books.id, books.title, authors.id as authorId, genres.id as genreId, publishers.id as publisherId FROM books LEFT JOIN authors ON books.author_id = authors.id RIGHT JOIN publishers ON books.publisher_id = publishers.id JOIN genres ON books.genre_id = genres.id WHERE books.id = $id");
        $currentBook = $result->fetch_assoc();

        $result = $connection->query('SELECT * FROM authors');
        $authors = $result->fetch_all(MYSQLI_ASSOC);

        if(count($authors) == 0) {
            $errors += "Няма автори";
        }

        $result = $connection->query('SELECT * FROM genres');
        $genres = $result->fetch_all(MYSQLI_ASSOC);

        if(count($genres) == 0) {
            $errors += "Няма жанрове";
        }

        $result = $connection->query('SELECT * FROM publishers');
        $publishers = $result->fetch_all(MYSQLI_ASSOC);

        if(count($publishers) == 0) {
            $errors += "Няма издателства";
        }
    }

    if(isset($_POST['updateBook'])) {
        $id = $currentBook['id'];

        $bookTitle = htmlentities($_POST['bookTitle'], ENT_QUOTES, 'UTF-8');
        $authorId = htmlentities($_POST['author'], ENT_QUOTES, 'UTF-8');
        $genreId = htmlentities($_POST['genre'], ENT_QUOTES, 'UTF-8');
        $publisherId = htmlentities($_POST['publisher'], ENT_QUOTES, 'UTF-8');

        $isRecordSuccessfullyUpdated = $connection->query("UPDATE books SET title = '$bookTitle', author_id = $authorId, genre_id = $genreId, publisher_id = $publisherId WHERE books.id = $id");

        // Refersh Current book information
        $result = $connection->query("SELECT books.id, books.title, authors.id as authorId, genres.id as genreId, publishers.id as publisherId FROM books LEFT JOIN authors ON books.author_id = authors.id RIGHT JOIN publishers ON books.publisher_id = publishers.id JOIN genres ON books.genre_id = genres.id WHERE books.id = $id");
        $currentBook = $result->fetch_assoc();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Редактиране на книга</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <!-- Navbar -->
    <?php include_once './includes/navbar.php'; ?>

    <!-- Content -->
    <div class="container mt-3">
        <?php if($isRecordSuccessfullyUpdated) { ?>
        <div class="row mt-3">
            <div class="col-md">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Поздравления!</strong> Успешно редактирахте книгата!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
        <?php } ?>

        <?php if(count($errors) > 0) { ?>
        <div class="row mt-3">
            <div class="col-md">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>ВЪзникна проблем!</strong> <?= $errors ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
        <?php } ?>

        <div class="row mt-3">
            <div class="col-md">
                <a href="books.php" class="btn btn-primary float-start">Назад</a>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md">
                <div class="card">
                    <div class="card-header">
                        Редактиране на книга
                    </div>
                    <div class="card-body">
                        <form method="POST">

                            <div class="mb-3">
                                <label for="bookId" class="form-label">ID на книгата</label>
                                <input type="text" class="form-control" id="bookId" name="bookId" value="<?= $currentBook['id'] ?>" disabled>
                            </div>

                            <div class="mb-3">
                                <label for="bookTitle" class="form-label">Име на книгата</label>
                                <input type="text" class="form-control" id="bookTitle" name="bookTitle" value="<?= $currentBook['title'] ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="author" class="form-label">Автор</label>
                                <select class="form-select" name="author" id="author" aria-label="Default select example">
                                    <?php foreach($authors as $author) { ?>
                                        <option <?= $author['id'] == $currentBook['authorId'] ? 'selected' : '' ?> value="<?= $author['id'] ?>"><?= $author['firstName'] . ' ' . $author['lastName'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="genre" class="form-label">Жанр</label>
                                <select class="form-select" name="genre" id="genre" aria-label="Default select example">
                                    <?php foreach($genres as $genre) { ?>
                                        <option <?= $genre['id'] == $currentBook['genreId'] ? 'selected' : '' ?> value="<?= $genre['id'] ?>"><?= $genre['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="publisher" class="form-label">Издателство</label>
                                <select class="form-select" name="publisher" id="publisher" aria-label="Default select example">

                                    <?php foreach($publishers as $publisher) { ?>
                                        <option <?= $publisher['id'] == $currentBook['publisherId'] ? 'selected' : '' ?> value="<?= $publisher['id'] ?>"><?= $publisher['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <button type="submit" name="updateBook" class="btn btn-primary">Запазване</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Popper & Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>