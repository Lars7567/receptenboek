<?php

require 'database.php';

$sql1 = "SELECT * FROM recepten  WHERE Duur = (SELECT MAX(Duur) FROM recepten)";
$result = mysqli_query($conn,$sql1);
$all_recepten_Langs_duurt = mysqli_fetch_all($result, MYSQLI_ASSOC);

$sql2 = "SELECT * FROM recepten WHERE Moelijkheidsgraad = 'Makkelijk te bereiden'";
$result = mysqli_query($conn,$sql2);
$all_recepten_Makkelijk = mysqli_fetch_all($result, MYSQLI_ASSOC);

$sql3 = "SELECT * FROM recepten  WHERE hoeveelheid_ingrediente = (SELECT MAX(hoeveelheid_ingrediente) FROM recepten)";
$result = mysqli_query($conn,$sql3);
$all_recepten_Meeste_ingrediente = mysqli_fetch_all($result, MYSQLI_ASSOC);

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

<div class="main_background_2">
<div class="background">
        <h2>Gerechten die het langst duuren om te maken</h2>
        <div class="gerecht_container">
        <?php foreach ($all_recepten_Langs_duurt as $recept_langs_duurt) : ?>
            <div class="Gerecht">
                <div class="gerecht_image">
                <a href="ReceptV.php?id=<?php echo $recept_langs_duurt['id'];?>"><img src="images/<?php echo $recept_langs_duurt['Plaatje'];?>" alt="Image not found" class="iamge"><a>
                    <div class="gerecht_naam">
                        <?php echo $recept_langs_duurt['Titel'];?>
                        <?php echo $recept_langs_duurt['rating'];?>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>

    <div class="background">
        <h2>Gerechten die het makelijkst zijn om te bereiden</h2>
        <div class="gerecht_container">
        <?php foreach ($all_recepten_Makkelijk as $recept_Makkelijk) : ?>
            <div class="Gerecht">
                <div class="gerecht_image">
                <a href="ReceptV.php?id=<?php echo $recept_Makkelijk['id'];?>"><img src="images/<?php echo $recept_Makkelijk['Plaatje'];?>" alt="Image not found" class="iamge"><a>
                    <div class="gerecht_naam">
                        <?php echo $recept_Makkelijk['Titel'];?>
                        <?php echo $recept_Makkelijk['rating'];?>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>

    <div class="background">
        <h2>Gerechten Met de meeste ingrediente</h2>
        <div class="gerecht_container">
        <?php foreach ($all_recepten_Meeste_ingrediente as $recept_Meeste_ingrediente) : ?>
            <div class="Gerecht">
                <div class="gerecht_image">
                <a href="ReceptV.php?id=<?php echo $recept_Meeste_ingrediente['id'];?>"><img src="images/<?php echo $recept_Meeste_ingrediente['Plaatje'];?>" alt="Image not found" class="iamge"><a>
                    <div class="gerecht_naam">
                        <?php echo $recept_Meeste_ingrediente['Titel'];?>
                        <?php echo $recept_Meeste_ingrediente['rating'];?>
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