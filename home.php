<?php 

    session_start();
    if(!isset($_SESSION['username'])){
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Home Page</title>
</head>
<body>

    <div class="container">
        <h1>Welcome <?php echo $_SESSION['username']; ?> </h1>
        <a href="logout.php">Log Out</a>
    </div> 
</body>
</html>