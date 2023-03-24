<?php

require 'database.php';

$Id = $_GET['id'];

$sql = "SELECT * From recepten Where id = $Id";

$result = mysqli_query($conn, $sql);

$driver = mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>
<body>

<?php  include('nav.php')?>



</body>
</html>