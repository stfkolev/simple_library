<?php require_once './includes/config.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Начална страница</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <!-- Navbar -->
    <?php include './includes/navbar.php' ?>

    <!-- Content -->
    <div class="container mt-3">
        <div class="row">
            <div class="col-md">
                <div class="card">
                    <div class="card-header">
                        Начална страница
                    </div>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni quos vel tenetur incidunt culpa mollitia eius corrupti consequuntur at aperiam necessitatibus, vero voluptatum eveniet, similique sunt iusto minima voluptate perspiciatis.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Popper & Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>