<?php include('include/header.php');?>

<div class="espacioDos"></div>
<header id="barra-superior">

<div class="container">
  <div class="row">
    <div class="col-md-2">
      <div class="text-center">
      <H1><a href="<?php echo site_url('/Home/index'); ?>">RINKU</a></H1>
      </div>
    </div>
    <div class="col-md-6">

    </div>
    <div class="col-md-4 text-right"> 

  </div>
  </div>
</div>
</header>


<div class="container">
  <div id="general">
    <div class="row">
      <div class="col-md-3">
        <div id="collapseCatalogos">
           <ul class="list-group">        
           <li class="list-group-item"><a href="<?php echo site_url('/Empleados/index'); ?>">Empleados</a></li>
           <li class="list-group-item"><a href="<?php echo site_url('/Movimientos/index'); ?>">Movimientos</a></li>
           <li class="list-group-item"><a href="<?php echo site_url('/Sueldos/index'); ?>">Sueldos</a></li>
           </ul>
          </div>

      </div>
      <div class="col-md-7">
      <br/>
      <a class="btn btn-success btn-sm" href="<?php echo site_url('/Empleados/agregarempleado'); ?>" role="button">Agregar un empleado</a>
      <br/><br/>
      <?php 
          if(empty($empleados)){
            echo "<h5>No existen Ciclos registrados.</h5>";
          }else{?>
            <table class="tabla-registros" class="display" cellspacing="6" cellpadding="8">
              <thead>
                <tr>
                  <th class="text-left">ID</th>
                  <th class="text-left">Numero de empleado</th>
                  <th class="text-left">Nombre</th>
                  <th class="text-left">Apellido Paterno</th>
                  <th class="text-left">Apellido Materno</th>
                  <th class="text-left">Rol</th>
                  <th class="text-left">Editar</th>

                </tr>
              </thead>
              <?php foreach ($empleados as $fila) { ?>
                <tr>
                  <td><?php echo $fila['id']; ?></td>
                  <td><?php echo $fila['numempleado']; ?></td>
                  <td><?php echo $fila['nombre'] ?></td>
                  <td><?php echo $fila['apellidoPaterno'] ?></td>
                  <td><?php echo $fila['apellidoMaterno'] ?></td>
                  <td>
                    
                  <?php 
                  switch ($fila['id_rol']) {
                    case 1: 
                      echo "Chofer";
                      break;
                    case 2: 
                      echo "Cargador";
                      break;
                    case 3: 
                      echo "Auxiliar";
                      break;
                  }
                  ?>
                
                </td>
                <td class="text-center">
                    <a href="<?php echo site_url("Empleados/editarEmpleado/".$fila['id']."") ?>">
                      <i class="fa fa-pencil-square-o fa-1x" aria-hidden="true"></i>
                    </a>
                  </td>
                </tr>
              <?php } ?>

            </table>
            <?php } ?>
            <div class="espacioUno"></div>
            <div align="right">
            <?php 
            echo $paginador->links();
            ?>
            </div>
      </div>

      <div class="col-md-2">
      <?php
      setlocale(LC_ALL,"es_MX.UTF-8");
      echo strftime("%A %d de %B del %Y");
      ?>

      </div>
    </div>  
  </div>
</div>


<div class="espacioAmplio"></div>



<?php include("include/footer.php");?>