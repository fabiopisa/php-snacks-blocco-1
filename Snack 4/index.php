<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 4</title>
</head>
<body>
<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
  <?php
    $students =[
      [
        'name'=> 'Fabio',
        'lastname'=> 'Pisanelli',
        'votes' => [5,4,6,1,7,2,3],
      ],
      [
        'name'=> 'Franco',
        'lastname'=> 'Franchi',
        'votes' => [5,7,6,8,7,9,6],
      ],
      [
        'name'=> 'Franklin',
        'lastname'=> 'Z Jhons',
        'votes' => [8,4,7,9,7,9,5],
      ],
    ]
  ?>

  <ul>
      <?php foreach($students as $student){ ?>
        <li>
          Nome: <?php echo $student['name']?> <br>
          Cognome: <?php echo $student['lastname']?> <br>
          <!-- con  nuber_format faccio il mio calcolo poi ',' e dico quanti decimali voglio poi ',' e gli dico di separare con la virgola i decimali e poi metto il punto nel caso ci fossero i migliaia da separare con il punto.. altrimenti se lascio solo virgola 2 le migliaia le separa con la virgola e i decimali con il punto -->
          Media voti: <?php echo number_format(array_sum($student['votes'])/count($student['votes']),2,',','.') ?>
        </li>
      <?php } ?>
  </ul>
</body>
</html>