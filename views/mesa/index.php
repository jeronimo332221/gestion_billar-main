


<?php 
    include_once __DIR__ . '/../templates/barra.php';

?>
<h1 class="nombre-pagina">Gestor De Mesas</h1>

<section class="mesa">
    <?php foreach($mesas as $mesa) { ?>
        <a href="/gestion_billar-main/public/mesa/ver?id= <?php echo $mesa->id; ?>" class="mesa-contenedor <?php if($mesa->billar_type == 1){echo "mesa-billar-contenedor";} ?>">
            <h4 class="id-mesa"><?php echo $mesa->id; ?></h4> 
           
        </a>
        
        <div class="acciones-mesa">
            <input type="submit" value="X" class="boton-eliminar boton-eliminar-mesa">
            
            <form action="/gestion_billar-main/public/cliente/eliminar" method="POST">
                    <?php foreach($clientes as $cliente) { ?>
                        
                        
                        <?php if($cliente->mesaId == $mesa->id){ ?>
                            <div class="cliente-contenedor">
                                <p class="mesa"> <?php echo $cliente->apodo ?>  </p>
                                <p class="mesa"> <?php echo $cliente->cumulado; ?>  </p>
            
                                
                                <div class="cliente-acciones campo-articulo">
                                    
                                    <form action="/gestion_billar-main/public/clienteArticulo/crear?id=<?php echo $cliente->id; ?>">
            
                                        <a class="campo-articulo" href="/gestion_billar-main/public/clienteArticulo/crear?id=<?php echo $cliente->id; ?>">+</a>
                                    </form>
                                </div>
                                
                            </div>
                            
                        <?php }; ?>
                        
                    <?php }  ; ?>
                    <input type="hidden" name="id" value="">
    
                    
                </form>
            </div>
            
        </a>
     <?php } ;?>
</section>

<?php 
    $script = "
        
    ";
?>