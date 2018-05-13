<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title> Lista de instrumentos </title>
   </head>
   <body>
      <h1> Lista de instrumentos </h1>
      <ul>
         <?php foreach ($lista as $item): ?>
            <li> <a href="<?php echo base_url() . 'instrumentos/ver_instrumento/' . $item['id'] ?>"> <?php echo $item['nombre'] ?> </a> </li>
         <?php endforeach; ?>
      </ul>
   </body>
</html>