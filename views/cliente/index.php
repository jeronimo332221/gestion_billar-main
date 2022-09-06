

<?php 
    include_once __DIR__ . '/../templates/barra.php';
    
    ?>
    <h1 class="nombre-pagina">Gestor De Clientes</h1>

<section>
    <div class="cliente-contenedor nombre-pagina nav">

        <a href="/gestion_billar-main/public/cliente?list=id"><label >ID</label></a>
        <a href="/gestion_billar-main/public/cliente?list=nombre"><label >NOMBRE</label></a>
        <a href="/gestion_billar-main/public/cliente?list=telefono"><label >TEL</label></a>
        <a href="/gestion_billar-main/public/cliente?list=mesaId"><label >MESA</label></a>
        <a href="/gestion_billar-main/public/cliente?list=cumulado"><label >IMPORTE</label></a>
    </div>
    
   
    <?php foreach($clientes as $cliente) { ?>
        <div class="cliente-contenedor">
            <h4><?php echo $cliente->id; ?></h4> 
            <p><?php echo $cliente->nombre; ?></p> 
            <p><?php echo $cliente->apodo; ?></p> 
            <p><?php echo $cliente->telefono; ?></p> 
            <a href="/gestion_billar-main/public/mesa/ver?id=<?php echo $cliente->mesaId; ?>"><?php echo $cliente->mesaId; ?></a> 
            <p>$ <?php echo $cliente->cumulado; ?></p> 
            <div class="acciones">
                <a class="boton" href="/gestion_billar-main/public/cliente/actualizar?id=<?php echo $cliente->id; ?>">!</a>
                <form action="/gestion_billar-main/public/cliente/eliminar" method="POST">
                    <input type="hidden" name="id" value="<?php echo $cliente->id; ?>">
    
                    <input type="submit" value="X" class="boton-eliminar">
                </form>
            </div>
            
            
        </div>
            <?php } ?>
</section>
<?php 
    $script = "
        <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script src='build/js/app.js'></script>
    ";
?>