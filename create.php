<?php
require 'connection.php'; // Use the connection.php file to get the $pdo connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $position = $_POST['position'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];

    // Check if the required fields are not empty
    if (!empty($name) && !empty($position) && !empty($department) && !empty($salary)) {
        // Prepare the statement to insert the data
        $stmt = $pdo->prepare('INSERT INTO employee (name, position, department, salary) VALUES (?, ?, ?, ?)');
        $stmt->execute([$name, $position, $department, $salary]);

        echo "Employee added successfully!";
    } else {
        echo "Please fill in all fields!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Employee</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="row mt-5 "> 
        <h1 class="text-center ">Add Employee</h1>
        <form method="POST">
            <div class="mb-3">
                <label>Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-4">
                <label>Position:</label>
                <input type="text" name="position" class="form-control" required>
            </div>
            <div class="mb-4">
                <label>Department:</label>
                <input type="text" name="department" class="form-control" required>
            </div>
            <div class="mb-4">
                <label>Salary:</label>
                <input type="number" name="salary" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success item-center gap-1 p-2">Add Employee</button>
            <a href="list.php" class="btn btn-primary item-center gap-1 p-2">Back to list</a>
        </form>
        </div>
    </div>

    <!-- Bootstrap scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"
        integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
