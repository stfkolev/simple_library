<?php 
    require_once './includes/config.php';

    $errors = [];
    $isRecordSuccessfullyUpdated = false;

    if(isset($_GET['id'])) {
        $id = htmlentities($_GET['id'], ENT_QUOTES, 'UTF-8');
        
        $result = $connection->query("SELECT * FROM publishers WHERE id = $id");
        $currentPublisher = $result->fetch_assoc();
    }

    if(isset($_POST['updatePublisher'])) {
        $id = $currentPublisher['id'];

        $publisherName = htmlentities($_POST['publisherName'], ENT_QUOTES, 'UTF-8');
        $publisherAddress = htmlentities($_POST['publisherAddress'], ENT_QUOTES, 'UTF-8');

        $isRecordSuccessfullyUpdated = $connection->query("UPDATE publishers SET name = '$publisherName', address = '$publisherAddress' WHERE id = $id");

        // Refersh Current Genre information
        $result = $connection->query("SELECT * FROM publishers WHERE id = $id");
        $currentPublisher = $result->fetch_assoc();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Редактиране на издателство</title>

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
                    <strong>Поздравления!</strong> Успешно редактирахте издателството!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
        <?php } ?>

        <div class="row mt-3">
            <div class="col-md">
                <a href="publishers.php" class="btn btn-primary float-start">Назад</a>
            </div>
        </div>


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
                <div class="card">
                    <div class="card-header">
                        Редактиране на издателство
                    </div>
                    <div class="card-body">
                        <form method="POST">

                            <div class="mb-3">
                                <label for="publisherId" class="form-label">ID на издателство</label>
                                <input type="text" class="form-control" id="publisherId" name="publisherId" value="<?= $currentPublisher['id'] ?>" disabled>
                            </div>

                            <div class="mb-3">
                                <label for="publisherName" class="form-label">Име на издателство</label>
                                <input type="text" class="form-control" id="publisherName" name="publisherName" value="<?= $currentPublisher['name'] ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="publisherAddress" class="form-label">Адрес на издателство</label>
                                <input type="text" class="form-control" id="publisherAddress" name="publisherAddress" value="<?= $currentPublisher['address'] ?>" required>
                            </div>

                            <button type="submit" name="updatePublisher" class="btn btn-primary">Запазване</button>

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