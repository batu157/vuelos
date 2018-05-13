<h1> Guardar informe </h1>
<form method="post" action="<?php echo base_url() ?>informes/guardar_post/<?php echo $id ?>">
    <div class="row">
       <label> Título </label>
       <input type="text" name="titulo" required="required" value="<?php echo $titulo ?>" />
    </div>
    <div class="row">
       <label> Descripción </label>
       <textarea name="descripcion" cols="100" rows="10" required="required" style="width: 100%;"><?php echo $descripcion; ?></textarea>
    </div>
    <div class="row">
       <label> Prioridad </label>
       <input type="number" min="1" max="5" name="prioridad" required="required" value="<?php echo $prioridad; ?>" />
    </div>
    <?php if (validation_errors()): ?>
        <div class="alert alert-error">
           <?php echo validation_errors(); ?>
        </div>
    <?php endif; ?>
    <div class="row">
       <input type="submit" class="btn btn-success" value="Guardar" />
       <a class="btn btn-danger" href="<?php echo base_url() ?>informes"> Cancelar </a>
    </div>
</form>