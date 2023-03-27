<?php
require 'database.php';

$sql = "SELECT * FROM recepten ";
$result = mysqli_query($conn,$sql);
$all_recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);

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

<div class="specials_main_background">
</div>
</body>
</html>