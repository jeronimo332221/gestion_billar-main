

<?php
    include_once __DIR__ . '/../templates/barra.php';
    include_once __DIR__ . '/../templates/alertas.php';
    $esPrimer = true
?>
<h1 class="nombre-pagina">Informacion Mesa</h1>

<form method="POST" class="formulario">
    
    
    <div class="contenedor-clientes">
       
        <?php  foreach($clienteV as $clV) {$cumulado = 0; ?>
        <div class="contenedor-cliente-mesa">
            <div class="datos-mesa"> <h4><?php echo $clV->id  ?></h4><h4><?php echo $clV->nombre  ?></h4></div>
           
           
            <section class="articulos">

                
                <div class="articulos-list">
                    <?php 
                    foreach($artV as $aV) {
                        
                        if($clV->id == $aV->clienteId) {
                            foreach($articulos as $articulo) {
                                if($aV->articuloId == $articulo->id) {
                                 
                                    $cumulado += $articulo->precio;
                                    $clV->cumulado = $cumulado; 
                                    $clV->guardar();
                               
                                   ?>
                                    <div class="articulo-list">
                                        <h4 class="articulo"><?php echo $articulo->id ?></h4>
                                        <h4 class="articulo"><?php echo $articulo->nombre ?></h4>
                                        <label class="articulo"><?php echo $articulo->precio ?></label>
                                        <a href="/gestion_billar-main/public/clienteArticulo/eliminar?id=<?php echo $aV->id;
                                    $clV->cumulado = $cumulado; 
                                    $clV->guardar();?>" class="boton-eliminar"></a>
                                        

                                    </div>
                                    
                               <?php }
                            }
                            
                        }
                    
            
                    }
       
                     ?>
                   
                    
                    <form action="">

                        <a class="campo campo-articulo" href="/gestion_billar-main/public/clienteArticulo/crear?id=<?php echo $clV->id; ?>">+</a>
                    </form>
                </div>

                
                   
                <div class="cumulado"><p>Cumulado</p> 
                <h4><?php if($esPrimer){$total = $cumulado; $esPrimer = false;}else{$total += $cumulado; };echo $cumulado;  ?></h4></div>

            </section>     
            
        </div>
    
    
    <?php }?>
    </div>
    
    

</form> 

<a href="/gestion_billar-main/public/mesa/cortar?total=<?php echo $total ; ?>" class="boton">CORTAR MESA</a>


