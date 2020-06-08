<?php

$age = 5;

if ($age >= 18) {
   $answer = "Co bys sis dal ?.";
   $img = "grafika/jo.jpg";
   
} else {
    $answer = "Omlouváme se.Alkoholické nápoje maldším 18-ti let neprodáváme.";
    $img = "grafika/ne.jpg";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Věk <?= $age; ?> let </h1>
  <h3> <?= $answer; ?> </h3>
  <img src="<?= $img; ?>" alt="obrázek">
</body>
</html>