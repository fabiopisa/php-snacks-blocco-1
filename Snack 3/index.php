<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 3</title>
</head>
<body>
  <!-- Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->
  <?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>

<div class="teach" style="background-color: grey; padding:20px; width:300px">
  <ul>
  <?php echo array_key_first($db) ?>
    <?php foreach($db['teachers'] as $teach){ ?>
      <li>Nome: <?php echo $teach['name'] ?>... Cognome: <?php echo $teach['lastname'] ?></li>
    <?php } ?>
  </ul>
</div>

<div class="pm" style="background-color: green; padding:20px; width:300px; margin-top: 30px;">
  <ul>
  <?php echo array_key_last($db) ?>
    <?php foreach($db['pm'] as $pm){ ?>
      <li>Nome: <?php echo $pm['name'] ?>... Cognome: <?php echo $pm['lastname'] ?></li>
    <?php } ?>
  </ul>
</div>
</body>
</html>