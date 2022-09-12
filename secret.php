<?php
session_start();
// if username saved, let them see this page
if (empty($_SESSION['username'])) {
    // redirect
    header("Location: index.php");
} else {
    $user = $_SESSION['username'];
}
// else, redirect to index.php
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Hello, <?php echo($user) ?> <br>
        Our secrets go here:-)
      
    </body>
</html>
