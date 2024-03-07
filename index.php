<?php
require_once __DIR__ ."/models/production.php";
require_once __DIR__ ."/db/db.php";
require_once __DIR__ ."/models/Genre.php";
require_once __DIR__ ."/models/Movie.php";
require_once __DIR__ ."/models/Serietv.php";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php oop</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<table class="table table-dark table-hover ">
    <?php foreach($Films as $Film) : ?>
<!-- <thead>
    <tr>
      <th scope="col"><?= $Film->title?></th>
    </tr>
  </thead> -->
  <tbody>
    <tr>
      
    <td>Title: <?=$Film->title?></td>

      <td>Lingua: <?=$Film->language?></td>
      <td>Voto: <?=$Film->vote?></td>
      <td>Nome Descrizione: <?=$Film->genere->nome?></td>
      <td>Descrizione: <?=$Film->genere->descrizione?></td>
      <?php if($Film instanceof Movie) : ?>
      <td>Profitto: <?=$Film->profit ?></td>
      <td>Durata: <?=$Film->duration ?></td>
      <?php endif?>
      <?php if($Film instanceof Serietv) : ?>
        <td>Stagioni: <?=$Film->seasons ?></td>
        <td>Episodi: <?=$Film->ep?></td>
      <?php endif?>
    </tr>
  </tbody>
  <?php endforeach;?>
</table>
</body>
</html>