<?php
include 'connection.php';

$sql = "SELECT * FROM employee";
$stmt = $pdo->query($sql);
$employees = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container ">
    <div class="table-responsive mt-5 mb-5 p-5  ">
        <a href="create.php" class="btn btn-info mb-3 item-right">Add employee</a>
        <table class="table table-striped table-hover table-bordered">
            <!-- <h1>Employee List</h1> -->
            <thead class="table-dark text-center">
                <tr>

                    <th>ID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Department</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employees as $employ): ?>
                <tr>
                    <!-- <th scope="row">1</th> -->
                    <td class="text-center"><?= $employ['id'] ?></td>
                    <td><?= $employ['name'] ?></td>
                    <td class="pl-5"><?= $employ['position'] ?></td>
                    <td><?= $employ['department'] ?></td>
                    <td class="text-end">$<?= $employ['salary'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<!-- Bootstrap scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"
        integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>