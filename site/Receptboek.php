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

<div class="Receptboek_main_background">
    <div class="image_background_1">
        <img src="images/image_Receptboek.png" alt="image not found" class="image_background_2">
    </div>
    <div class="Info_Receptboek">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam nam debitis optio aut beatae quisquam eligendi molestias veniam voluptatum repellat porro quam totam repudiandae enim quos, doloribus possimus facilis atque.
        Lorem, ipsum dolor sit amet consectetur adipisiciebitis optio aut beatae quisquam eligendi molestias veniam voluptatum repellat porro quam totam repudiandae enim quos, doloribus possimus facilis atque.
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam nam debitis optio aut beatae quisquam eligendi molestias veniam voluptatum repellat porro quam totam repudiandae enim quos, doloribus possimus facilis atque.
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam nam debitis optio aut beatae quisquam eligendi molestias veniam voluptatum repellat porro quam totam repudiandae enim quos, doloribus possimus facilis atque.
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam nam debitis optio aut beatae quisquam eligendi molestias veniam voluptatum repellat porro quam totam repudiandae enim quos, doloribus possimus facilis atque.
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam nauisquam eligendi molestias veniam voluptatum repellat porro quam totam repudiandae enim quos, doloribus possimus facilis atque.
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam nam debitis optio aut beatae quisquam  repellat porro quam totam repudiandae enim quos, doloribus possimus facilis atque.
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam nam debitis optio aut beatae quisquam eligendi molestias veniam voluptatum repellat porro quam totam repudiandae enim quos, doloribus possimus facilis atque.
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam nam debitis optio aut beatae quisquam eligendi molestias veniam voluptatum repellat porro quam totam repudiandae enim quos, doloribus possimus facilis atque.
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam nam debitis optio aut beatae quisquam eligendi molestias veniam voluptatum repellat porro quam totam repudiandae enim
        quos, doloribus possimus facilis atque.


        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam nam debitis optio aut  quisquam eligendi molestias veniam voluptatum repellat porro quam totam repudiandae enim quos, doloribus possimus facilis atque.
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam nam debitis optio aut beatae quisquam eligendi molestias veniam voluptatum repellat porro quam totam repudiandae enim quos, doloribus possimus facilis atque.
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam nam det beatae quisquam eligendi molestias veniam voluptatum repellat porro quam totam repudiandae enim quos, doloribus possimus facilis atque.
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam nam debitis optio aut beatae quisquam eligendi molestias veniam voluptatum repellat porro quam totam repudiandae enim quos, doloribus possimus facilis atque.
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam nam debitis optio aut beatae quisquam eligendi molestias veniam voluptatum repellat porro quam totam repudiandae enim quos, doloribus possimus facilis atque.
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam nam debitis optio aut beatae quisquam elieniam voluptatum repellat porro quam totam repudiandae enim quos, doloribus possimus facilis atque.
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam nam debitis optio aut beatae quisquam eligendi molestias veniam voluptatum repella
        
        t porro quam totam repudiandae enim quos, doloribus possimus facilis atque.
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam nam debitis optio aut beatae quisquam eligendi molestias veniam voluptatum repellat porro quam totam repudiandae enim quos, doloribus possimus facilis atque.
        Lorem, ipsum dolor sit amet consectetur adipisicing eltatum repellat porro quam totam repudiandae enim quos, doloribus possimus facilis atque

    </div>
</div>
</body>
</html>