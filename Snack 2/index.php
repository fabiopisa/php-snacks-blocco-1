<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 2</title>
</head>
<body>
  <!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
 -->

<?php
$arrDates = [
  '15/05/2019' => [
    [
      'title' => 'Post 4',
      'author' => 'Michele Pagani',
      'text' => 'testo post 4',
    ],
    [
      'title' => 'Post 5',
      'author' => 'Ugo Deughi',
      'text' => 'testo post 5',
    ],
    [
      'title' => 'Post 6',
      'author' => 'Mario Rossi',
      'text' => 'testo post 6',
    ]
  ],
  '16/05/2019' => [
    [
      'title' => 'Post 7',
      'author' => 'fanco Franchi',
      'text' => 'testo post 7',
    ],
    [
      'title' => 'Post 8',
      'author' => 'Servo Santo',
      'text' => 'testo post 8',
    ],
    [
      'title' => 'Post 9',
      'author' => 'Carmine Esposito',
      'text' => 'testo post 9',
    ]
  ],
  '17/05/2019' => [
    [
      'title' => 'Post 10',
      'author' => 'Giulia Verdi',
      'text' => 'testo post 10',
    ],
    [
      'title' => 'Post 11',
      'author' => 'Fabio Pisanelli',
      'text' => 'testo post 11',
    ],
    [
      'title' => 'Post 12',
      'author' => 'Anna Panna',
      'text' => 'testo post 12',
    ]
  ],
];

?>


<ul>
    <?php foreach($arrDates as $date => $valueDate){ ?>
      <li>
       <?php echo $date ?>
       <ul>
        <?php foreach ($valueDate as $data){?>
          <li><?php echo "Titolo: " . $data['title'] . ", autore: " . $data['author'] . ", testo: " . $data['text'] ?></li>
        <?php } ?>
       </ul>
      </li>
    <?php } ?>
  </ul>
</body>
</html>