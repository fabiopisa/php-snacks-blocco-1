<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 1</title>
</head>
<body>
<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
$arrMatchs =[
  [
    "teamHome" => "Lakers",
    "teamGuest" => "Celtics",
    "pointHome" => 55,
    "pointGuest" => 60,
  ],
  [
    "teamHome" => "Nets",
    "teamGuest" => "Bucks",
    "pointHome" => 80,
    "pointGuest" => 75,
  ],
  [
    "teamHome" => "Knicks",
    "teamGuest" => "Heat",
    "pointHome" => 78,
    "pointGuest" => 96,
  ],
];

?>
  
  <ul>
    <?php foreach ($arrMatchs as $match){ ?>
      <li><?php echo $match['teamHome'] ?> - <?php echo $match['teamGuest'] ?> | <?php echo $match['pointHome'] ?>-<?php echo $match['pointGuest'] ?></li>
    <?php } ?>
  </ul>



</body>
</html>