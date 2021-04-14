<?php 
    require_once './includes/config.php';

    $result = $connection->query('SELECT * FROM authors');
    $authors = $result->fetch_all(MYSQLI_ASSOC);

    $isSuccessfullyDeleted = false;

    if(isset($_POST['delete']) && isset($_POST['authorId'])) {
        $authorId = htmlentities($_POST['authorId'], ENT_QUOTES, 'UTF-8');

        $result = $connection->query("DELETE FROM authors WHERE id = $authorId");
        $result = $connection->query("DELETE FROM books WHERE author_id = $authorId"); // Delete cascades

        $isSuccessfullyDeleted = true;
        
        // Refresh List
        $result = $connection->query('SELECT * FROM authors');
        $authors = $result->fetch_all(MYSQLI_ASSOC);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Автори</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <!-- Navbar -->
    <?php include_once './includes/navbar.php'; ?>

    <!-- Content -->
    <div class="container mt-3">
        <?php if($isSuccessfullyDeleted) { ?>
            <div class="row mt-3">
                <div class="col-md">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Поздравления!</strong> Успешно изтрихте една книга!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        <?php } ?>

        <div class="row mt-3">
            <div class="col-md">
                <a href="add_author.php" class="btn btn-primary float-end">Добави автор</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md">
                <div class="card">
                    <div class="card-header">
                        Автори
                    </div>
                    <div class="card-body">

                        <?php if(count($authors) > 0) { ?>

                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Име</th>
                                        <th>Фамилия</th>
                                        <th>Действия</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($authors as $author) { ?>
                                        <tr>
                                            <td><?php echo $author['id']; ?></td>
                                            <td><?php echo $author['firstName']; ?></td>
                                            <td><?php echo $author['lastName']; ?></td>
                                            <td>
                                                <a href="edit_author.php?id=<?= $author['id']?>" class="btn btn-warning">Редактиране</a>
                                                <form method="POST" style="display: inline-block">
                                                    <input type="hidden" name="authorId" value="<?= $author['id']; ?>">
                                                    <button name="delete" class="btn btn-danger">Изтриване</button>
                                                    
                                                </form>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                        <?php } else { ?>

                            <div class="alert alert-warning" role="alert">
                                Няма данни в базата в момента!
                            </div>
                            
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Popper & Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>