<?php

require 'database.php';

$sql = "SELECT * FROM recepten WHERE Menugang = 'Voorgerecht'";
$result = mysqli_query($conn,$sql);
$all_recepten_Voorgerecht = mysqli_fetch_all($result, MYSQLI_ASSOC);

$sql2 = "SELECT * FROM recepten WHERE menugang = 'Hoofdgerecht'";
$result = mysqli_query($conn,$sql2);
$all_recepten_Hoofdgerecht = mysqli_fetch_all($result, MYSQLI_ASSOC);

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



<div class="main_background">
    <div class="background">
        <h2>Voorgerechten</h2>
        <div class="gerecht_container">
        <?php foreach ($all_recepten_Voorgerecht as $recept_Voorgerecht) : ?>
            <div class="Gerecht">
                <div class="gerecht_image">
                <a href="ReceptV.php?id=<?php echo $recept_Voorgerecht['id'];?>"><img src="images/<?php echo $recept_Voorgerecht['Plaatje'];?>" alt="Image not found" class="iamge"><a>
                    <div class="gerecht_naam">
                        <?php echo $recept_Voorgerecht['Titel'];?>
                        <?php echo $recept_Voorgerecht['rating'];?>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
    
    <div class="background">
        <h2>Hoofdgerechten</h2>
        <div class="gerecht_container">
        <?php foreach ($all_recepten_Hoofdgerecht as $recept_Hoofdgerecht) : ?>
            <div class="Gerecht">
                <div class="gerecht_image">
                    <a href="Recept.php?id=<?php echo $recept_Hoofdgerecht['id'];?>"><img src="images/<?php echo $recept_Hoofdgerecht['Plaatje'];?>" alt="Image not found" class="iamge"><a>
                    <div class="gerecht_naam">
                        <?php echo $recept_Hoofdgerecht['Titel'];?>
                        <?php echo $recept_Hoofdgerecht['rating'];?>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
</div>
</div>

<?php  include('Footer.php')?>

</body>
</html>
