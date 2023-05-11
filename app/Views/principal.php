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
        Plataforma para el control de sueldos y compensaciones de Rinku Cinematografica.
 

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



