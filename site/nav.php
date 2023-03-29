<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="nav_background">
        <label><img src="images/Logo.png" alt="image not found" class="Logo-width"><a class="titel"></a></label>
        <ul>
            <li><a class="active" href="index.php">HOME</a></li>
            <li><a class="active" href="Receptboek.php">ReceptBoek</a></li>
            <li><a class="active" href="specials.php">Speciaal</a></li>
            <?php

require 'database.php';

$sql = "SELECT COUNT(*) as total_numbers FROM recepten WHERE id REGEXP '^[0-9]+$'";

// Execute query
$result = mysqli_query($conn, $sql);

if ($result) {
    // Fetch the result
    $row = mysqli_fetch_assoc($result);
    // Print the total number of numbers in the database
    echo "Recept ideeé " . $row["total_numbers"];
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
        </ul>
    </nav>

</body>
</html>