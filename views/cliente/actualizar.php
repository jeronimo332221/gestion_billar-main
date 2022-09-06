
<?php
    include_once __DIR__ . '/../templates/barra.php';
    include_once __DIR__ . '/../templates/alertas.php';
    ?>
    <h1 class="nombre-pagina">Informacion Cliente</h1>

<form method="POST" class="formulario" action="/gestion_billar-main/public/cliente/actualizar?id=<?php echo $cliente->id ?>">
    <input type="checkbox">
    <?php include_once __DIR__ . '/formulario.php'; ?>
    
    <input type="submit" class="boton" value="Guardar Cliente/s" >
</form>