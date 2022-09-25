<?php require 'dbconfig.php'; ?>


<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];


    $query = "INSERT INTO data (name,age,gender) VALUES('$name','$age','$gender')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Record Inserted Successfully!');</script>";
    }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h1>Insert Data</h1>
        <form action="" method="post">
            <input type="text" name="name" placeholder="Name">
            <input type="number" name="age" placeholder="Age">
            <input type="text" name="gender" placeholder="Gender">
            <button type="submit" name="submit">Insert Data</button>
        </form>
    </div>

</body>

</html>