<?php
session_start();
require 'database.php';

$Id = $_GET['id'];

$sql = "SELECT * From recepten Where id = $Id";

$result = mysqli_query($conn, $sql);

$all_recept_Voorgerecht = mysqli_fetch_all($result, MYSQLI_ASSOC);

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

<div class="Main_background_info">
    <div class="Container_info">
        <?php foreach ($all_recept_Voorgerecht as $recept_Voorgerecht) : ?>
        <div class="Recept_Info">
            <div class="Info">
                <?php echo $recept_Voorgerecht['Instructie'];?>
                <div class="Recept">
                    <li><?php echo $recept_Voorgerecht['Ingredient'];?></li>
                    <div class="Extra_details">
                        <li><?php echo $recept_Voorgerecht['Moelijkheidsgraad'];?></li>
                        <li><?php echo $recept_Voorgerecht['Menugang'];?></li>
                        <li><?php echo $recept_Voorgerecht['rating'];?></li>
                        <li>Bereidingstijd: <?php echo $recept_Voorgerecht['Duur'];?> min</li>
                    </div>
                </div>
            </div>
        </div>
        <div class="Image_infoproduct">
            <img src="images/<?php echo $recept_Voorgerecht['Plaatje'];?>" alt="Image not found" class="Image">
        </div>
        <div class="Image_receptboek">
        </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>