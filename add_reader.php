<?php 
    require_once './includes/config.php';

    $errors = [];
    $isRecordSuccessfullyAdded = false;

    if(isset($_POST['createReader'])) {
        $readerFirstName = htmlentities($_POST['readerFirstName'], ENT_QUOTES, 'UTF-8');
        $readerLastName = htmlentities($_POST['readerLastName'], ENT_QUOTES, 'UTF-8');
        $readerAddress = htmlentities($_POST['readerAddress'], ENT_QUOTES, 'UTF-8');
        $readerUCN = htmlentities($_POST['readerUCN'], ENT_QUOTES, 'UTF-8');
        $readerWork = htmlentities($_POST['readerWork'], ENT_QUOTES, 'UTF-8');

        $isRecordSuccessfullyAdded = $connection->query("INSERT INTO readers (firstName, lastName, address, UCN, work) VALUES('$readerFirstName', '$readerLastName', '$readerAddress', '$readerUCN', '$readerWork')");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Добавяне на читател</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <!-- Navbar -->
    <?php include_once './includes/navbar.php'; ?>

    <!-- Content -->
    <div class="container mt-3">
        <?php if($isRecordSuccessfullyAdded) { ?>
        <div class="row mt-3">
            <div class="col-md">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Поздравления!</strong> Успешно добавихте читател!
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
                <a href="readers.php" class="btn btn-primary float-start">Назад</a>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md">
                <div class="card">
                    <div class="card-header">
                        Добавяне на читател
                    </div>
                    <div class="card-body">
                        <form method="POST">

                            <div class="mb-3">
                                <label for="readerFirstName" class="form-label">Име на читател</label>
                                <input type="text" class="form-control" id="readerFirstName" name="readerFirstName" required>
                            </div>

                            <div class="mb-3">
                                <label for="readerLastName" class="form-label">Фамилия на читател</label>
                                <input type="text" class="form-control" id="readerLastName" name="readerLastName" required>
                            </div>

                            <div class="mb-3">
                                <label for="readerAddress" class="form-label">Адрес на читател</label>
                                <input type="text" class="form-control" id="readerAddress" name="readerAddress" required>
                            </div>

                            <div class="mb-3">
                                <label for="readerUCN" class="form-label">ЕГН на читател</label>
                                <input type="text" class="form-control" pattern="\d+" maxlength="10" id="readerUCN" name="readerUCN" required>
                            </div>

                            <div class="mb-3">
                                <label for="readerWork" class="form-label">Работна позиция на читател</label>
                                <input type="text" class="form-control" id="readerWork" name="readerWork" required>
                            </div>

                            <button type="submit" name="createReader" class="btn btn-primary">Създаване</button>

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