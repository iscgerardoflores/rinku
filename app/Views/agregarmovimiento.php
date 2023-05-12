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
      <a class="btn btn-success btn-sm" href="<?php echo site_url('/Movimientos/agregarmovimiento'); ?>" role="button">Agregar un Movimiento</a>
      <br/><br/>
      <?php if ($session->has('Movimiento')) {; ?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Mensaje:</strong> <?php echo $session->get('Movimiento') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php }
        $session->remove('Movimiento'); ?>


      <form action="<?php echo site_url('Movimientos/insertarMovimiento'); ?>" method="post">

        <div class="espacioDos"></div>
        <div class="row">
          <div class="col">
            Numero de empleado <span id="solonumeros">(Solo ingrese numeros)</span>
            <input type="number" name="numempleado" id="numempleado" class="form-control form-control-sm" required="">
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
          Rol
            <select class="form-control form-control-sm" name="rol" id="rol" required="">
              <option value="">Seleccione una opción</option>
              <option value="1">Chofer</option>
              <option value="2">Cargador</option>
              <option value="3">Auxiliar</option>
            </select>
          </div>
        </div>
        <div class="espacioDos"></div>

        <div class="row">
          <div class="col">
          Mes
            <select class="form-control form-control-sm" name="mes" id="mes" required="">
              <option value="">Seleccione una opción</option>
              <option value="01">ENERO</option>
              <option value="02">FEBRERO</option>
              <option value="03">MARZO</option>
              <option value="04">ABRIL</option>
              <option value="05">MAYO</option>
              <option value="06">JUNIO</option>
              <option value="07">JULIO</option>
              <option value="08">AGOSTO</option>
              <option value="09">SEPTIEMBRE</option>
              <option value="10">OCTUBRE</option>
              <option value="11">NOVIEMBRE</option>
              <option value="12">DICIEMBRE</option>
            </select>
          </div>
          <div class="col">
          Cantidad de entregas 
          <input type="number" name="num_entregas" id="num_entregas" class="form-control form-control-sm" required="">
          </div>
        </div>

        <div class="espacioUno"></div><div class="espacioUno"></div>
        <div align="right">
        <button type="submit" name="submitaddmovimiento" class="btn btn-primary btn-sm">Guardar</button>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script>
$('#numempleado').change(function(){
  var numempleado = document.getElementById("numempleado").value;
  ObtenerDatosEmpleado(numempleado);
  
});


function ObtenerDatosEmpleado(numempleado){

    $.ajax({
      type: "POST",
        url: "<?php echo site_url('Movimientos/ObtenerDatosEmpleado'); ?>",
        data: {numempleado},
        success: function(text) {
          
          var contenido = text.split('-');
          var nombre = contenido[0];
          var rol    = contenido[1]

          //alert(text);
          //alert();
          document.getElementById("nombre").value = nombre;
          document.getElementById("rol").value = rol;
        }
    });

}

</script>