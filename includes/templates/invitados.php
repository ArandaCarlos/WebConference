<?php

    try {
        require_once('includes/funciones/bd_conexion.php');
        $sql .= " SELECT * FROM `invitados` ";
        $resultado = $conn->query($sql);
      } catch (\Exception $e) {
        echo $e->getMessage();
    }

?>
     <section class="invitados contenedor seccion">
        <h2>Nuestros Invitados</h2>
        <ul class="lista-invitados ">
        <?php while($invitados = $resultado->fetch_assoc()) { ?>
             <li>
                <div class="invitado">
                  <a class="invitado-info" href="#invitado<?php echo $invitados['id_invitado'];?>">
                    <img src="img/<?php echo $invitados['url_imagen']?>" alt="imagen invitado">
                    <p><?php echo $invitados['nombre_invitado']. " " . $invitados['apellido_invitado']?></p>
                  </a>
                  </div>
            </li>

            <div style="display:none;">
              <div class="invitado-info" id="invitado<?php echo $invitados['id_invitado'];?>">
              <h2><?php echo $invitados['nombre_invitado']." ". $invitados['apellido_invitado'];?></h2>  
              <img src="img/<?php echo $invitados['url_imagen']?>" alt="imagen invitado">
              <p><?php echo $invitados['descripcion'] ?></p>
            </div>
          </div>
            
       
    <!--INVITADOS-->
      <?php } ?>

      </ul>
    </section>
<?php
   $conn->close();
?>