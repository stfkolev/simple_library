<?php 
    require_once './includes/config.php';

    $result = $connection->query('SELECT * FROM publishers');
    $publishers = $result->fetch_all(MYSQLI_ASSOC);

    if(isset($_POST['delete']) && isset($_POST['publisherId'])) {
        $publisherId = htmlentities($_POST['publisherId'], ENT_QUOTES, 'UTF-8');
        $result = $connection->query("DELETE FROM publishers WHERE id = $publisherId");

        $isSuccessfullyDeleted = true;
        
        // Refresh List
        $result = $connection->query('SELECT * FROM publishers');
        $publishers = $result->fetch_all(MYSQLI_ASSOC);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Издателства</title>

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
                <a href="add_publisher.php" class="btn btn-primary float-end">Добави издателство</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md">
                <div class="card">
                    <div class="card-header">
                        Издателства
                    </div>
                    <div class="card-body">

                        <?php if(count($publishers) > 0) { ?>

                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Име</th>
                                        <th>Адрес</th>
                                        <th>Действия</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($publishers as $publisher) { ?>
                                        <tr>
                                            <td><?php echo $publisher['id']; ?></td>
                                            <td><?php echo $publisher['name']; ?></td>
                                            <td><?php echo $publisher['address']; ?></td>
                                            <td>
                                                <a href="edit_publisher.php?id=<?= $publisher['id']?>" class="btn btn-warning">Редактиране</a>
                                                <form method="POST" style="display: inline-block">
                                                    <input type="hidden" name="publisherId" value="<?= $publisher['id']; ?>">
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