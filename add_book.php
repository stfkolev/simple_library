<?php 
    require_once './includes/config.php';

    $result = $connection->query('SELECT * FROM authors');
    $authors = $result->fetch_all(MYSQLI_ASSOC);

    $result = $connection->query('SELECT * FROM genres');
    $genres = $result->fetch_all(MYSQLI_ASSOC);

    $result = $connection->query('SELECT * FROM publishers');
    $publishers = $result->fetch_all(MYSQLI_ASSOC);

    if(isset($_POST['createBook'])) {
        $bookTitle = htmlentities($_POST['bookTitle'], ENT_QUOTES, 'UTF-8');
        $authorId = htmlentities($_POST['author'], ENT_QUOTES, 'UTF-8');
        $genreId = htmlentities($_POST['genre'], ENT_QUOTES, 'UTF-8');
        $publisherId = htmlentities($_POST['publisher'], ENT_QUOTES, 'UTF-8');

        $result = $connection->query("INSERT INTO books($bookTitle, $authorId, $genreId, $publisherId)");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Добавяне на книга</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <!-- Navbar -->
    <?php include_once './includes/navbar.php'; ?>

    <!-- Content -->
    <div class="container mt-3">
        <div class="row mt-3">
            <div class="col-md">
                <a href="add_book.php" class="btn btn-primary float-end">Добави книга</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md">
                <div class="card">
                    <div class="card-header">
                        Добавяне на книга
                    </div>
                    <div class="card-body">
                        <form method="POST">

                            <div class="mb-3">
                                <label for="bookTitle" class="form-label">Име на книгата</label>
                                <input type="text" class="form-control" id="bookTitle" name="bookTitle" required>
                            </div>

                            <div class="mb-3">
                                <label for="author" class="form-label">Автор</label>
                                <select class="form-select" name="author" id="author" aria-label="Default select example">
                                    <?php foreach($authors as $author) { ?>
                                        <option value="<?= $author['id'] ?>"><?= $author['firstName'] . ' ' . $author['lastName'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="genre" class="form-label">Жанр</label>
                                <select class="form-select" name="genre" id="genre" aria-label="Default select example">
                                    <?php foreach($genres as $genre) { ?>
                                        <option value="<?= $genre['id'] ?>"><?= $genre['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="publisher" class="form-label">Издателство</label>
                                <select class="form-select" name="publisher" id="publisher" aria-label="Default select example">

                                    <?php foreach($publishers as $publisher) { ?>
                                        <option value="<?= $publisher['id'] ?>"><?= $publisher['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <button type="submit" name="createBook" class="btn btn-primary">Създаване на книга</button>

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