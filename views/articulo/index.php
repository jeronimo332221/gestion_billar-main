

<?php

    include_once __DIR__ . '/../templates/barra.php';
    include_once __DIR__ . '/../templates/alertas.php';


?>

<h1 class="nombre-pagina">Gestor De Articulos</h1>


<section>
   <div class="cliente-contenedor nombre-pagina nav">
            <a href="/gestion_billar-main/public/articulo?list=id"><label>ID   </label></a> 
            <a href="/gestion_billar-main/public/articulo?list=nombre"><label>NOM</label></a> 
            <a href="/gestion_billar-main/public/articulo?list=rubro"><label>RUB</label></a> 
            <a href="/gestion_billar-main/public/articulo?list=stockmin"><label>StockMin</label></a> 
            <a href="/gestion_billar-main/public/articulo?list=precio"><label>Precio</label></a> 
            <a href="/gestion_billar-main/public/articulo?list=fechaRepo"><label>FechaRepo</label></a> 
            <a href="/gestion_billar-main/public/articulo?list=fechaRepoCocina"><label>FechaRepoCocina</label></a> 
            <a href="/gestion_billar-main/public/articulo?list=stockCocina"><label>StockCocina</label></a> 
            <a href="/gestion_billar-main/public/articulo?list=existencia"><label>Existencia</label></a> 
            <a href="/gestion_billar-main/public/articulo?list=acumVend"><label>AcumVend</label></a> 
            <a href="/gestion_billar-main/public/articulo?list=fraccion"><label>Fraccion</label></a> 
            <a href="/gestion_billar-main/public/articulo?list=cantRep"><label>CantRep</label></a> 
         
    
   </div>
           
   
    <?php foreach($articulos as $articulo) { ?>
        <div class="cliente-contenedor">
            <!-- public $id;
            public $nombre;
            public $rubro;
            public $stockMin;
            public $precio;
            public $fechaRepo;
            public $fechaRepoCocina;
            public $stockCocina;
            public $existencia;
            public $acumVend;
            public $fraccion;
            public $cantRep; -->

            <h4><?php echo $articulo->id; ?></h4> 
            <p><?php echo $articulo->nombre; ?></p> 
            <p><?php echo $articulo->rubro; ?></p> 
            <p><?php echo $articulo->stockMin; ?></p> 
            <p>$ <?php echo $articulo->precio; ?></p> 
            <p><?php echo $articulo->fechaRepo; ?></p> 
            <p><?php echo $articulo->fechaRepoCocina; ?></p> 
            <p><?php echo $articulo->stockCocina; ?></p> 
            <p><?php echo $articulo->existencia; ?></p> 
            <p><?php echo $articulo->acumVend; ?></p> 
            <p><?php echo $articulo->fraccion; ?></p> 
            <p><?php echo $articulo->cantRep; ?></p> 
            <div class="acciones">
                <a class="boton" href="/gestion_billar-main/public/articulo/actualizar?id=<?php echo $articulo->id; ?>">!</a>
                <form action="/gestion_billar-main/public/articulo/eliminar" method="POST">
                    <input type="hidden" name="id" value="<?php echo $articulo->id; ?>">
    
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