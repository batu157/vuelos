<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title> Instrumento </title>
   </head>
   <body>
      <?php if ($instrumento): ?>
         <h1> <?php echo $instrumento['nombre'] ?> </h1>
         <p> <?php echo $instrumento['descripcion'] ?> </p>
      <?php else: ?>
         <h1> Instrumento no encontrado </h1>
      <?php endif; ?>
      <p> <a href="<?php echo base_url(); ?>instrumentos/ver_lista"> Volver atrás </a> </p>
   </body>
</html>