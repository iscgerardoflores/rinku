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
      <div class="col-md-6">
      <br/>
      <a class="btn btn-success btn-sm" href="<?php echo site_url('/Empleados/agregarempleado'); ?>" role="button">Agregar un empleado</a>
      <br/><br/>
      <?php if ($session->has('Empleado')) {; ?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Mensaje:</strong> <?php echo $session->get('Empleado') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php }
        $session->remove('Empleado'); ?>


      <form action="<?php echo site_url('Empleados/insertarEmpleado'); ?>" method="post">

        <div class="espacioDos"></div>
        <div class="row">
          <div class="col">
            Numero de empleado <span id="solonumeros">(Solo ingrese numeros)</span>
            <input type="number" name="num_empleado" id="num_empleado" class="form-control form-control-sm" required="">
          </div>
          <div class="col">

          </div>
        </div>
        <div class="espacioDos"></div>
        <div class="row">
          <div class="col">
            Nombre
            <input type="text" name="nombre" id="nombre" class="form-control form-control-sm" required="">
          </div>
          <div class="col">
          Apellido Paterno
            <input type="text" name="apellidoPaterno" id="apellidoPaterno" class="form-control form-control-sm" required="">
          </div>
        </div>
        <div class="espacioDos"></div>

        <div class="row">
          <div class="col">
          Apellido Materno
            <input type="text" name="apellidoMaterno" id="apellidoMaterno" class="form-control form-control-sm" required="">
          </div>
          <div class="col">
          Rol
            <select class="form-control form-control-sm" name="rol" id="rol" required="">
              <option value="">Seleccione una opción</option>
              <option value="1">Chofer</option>
              <option value="2">Cargador</option>
              <option value="3">Auxiliar</option>
            </select>
          </div>
        </div>

        <div class="espacioUno"></div><div class="espacioUno"></div>
        <div align="right">
        <button type="submit" name="submitaddempleado" class="btn btn-primary btn-sm">Guardar</button>
        <button type="reset" class="btn btn-primary btn-sm">Cancelar</button>
        </div>

        </form>
 

      </div>

      <div class="col-md-3">
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