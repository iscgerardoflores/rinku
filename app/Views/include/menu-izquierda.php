<?php
$curURL = current_url();

$Catalogos = ["Ciclos"=>1,"Horarios"=>2,"Niveles"=>3,"Salones"=>4,"Cursos"=>5,"Frecuencia"=>6,
"Sucursales"=>7,"Facultades"=>8,"Carreras"=>9,"Usuarios"=>10,"Roles"=>11,"Integraciones"=>12,"Medios"=>13,
"Canales"=>14,"Origenes"=>15,"Notificaciones"=>16,"Avisos Pop-Up"=>17,"Black List"=>18,"Calendario Anual"=>19,
"Turnos"=>20,"Accesos"=>21,"Materiales"=>22,"Tipo Materiales"=>23,"Categoría Materiales"=>24,"Clases Demo"=>25,"Alumnos"=>26,"Teachers"=>26];

  foreach($Catalogos as $a=>$b){
    if(strpos($curURL, trim($a))){
      $collCatalogos  = "collapse show";
      $enlaceActivoCatalogo = trim($a); 
    break;
    }else{
      $collCatalogos = "collapse";
      $enlaceActivoCatalogo="";
    }
  }


  
  $Modulos = ["Recursos"=>1,"Evaluaciones"=>2,"Grupos"=>4,"Prospectos"=>5,"Tutores"=>7,"ClasesDemo"=>8,"Preguntas"=>9];
  foreach($Modulos as $a=>$b){
    if(strpos($curURL, trim($a))){
      $collModulos  = "collapse show";
      $enlaceActivoModulo = trim($a); 
    break;
    }else{
      $collModulos = "collapse";
      $enlaceActivoModulo="";
    }
  }
if(empty($enlaceActivo)){
  $enlaceActivo = "";
}
$collSistema="collapse";
$collReportes="collapse";
$collIntegraciones="collapse";


?>










          
          <a data-toggle="collapse" href="#collapseCatalogos" role="button" aria-expanded="false" aria-controls="collapseCatalogos">
                <h2 class="titulos-menu">Catalogos</h2>
          </a>
          
          <div class="<?php echo $collCatalogos;?>" id="collapseCatalogos">
           <ul class="list-group">        
           <li class="list-group-item"><a class="<?php if($enlaceActivoCatalogo=='Ciclos'){echo 'mi-active';}?>" href="<?php echo site_url('Ciclos/index')?>">Ciclos</a></li>
           <li class="list-group-item"><a class="<?php if($enlaceActivoCatalogo=='Horarios'){echo 'mi-active';}?>" href="<?php echo site_url('Horarios/index')?>">Horarios</a></li>
           <li class="list-group-item"><a class="<?php if($enlaceActivoCatalogo=='Salones'){echo 'mi-active';}?>" href="<?php echo site_url('Salones/index')?>">Salones</a></li>
           <li class="list-group-item"><a class="<?php if($enlaceActivoCatalogo=='Frecuencia'){echo 'mi-active';}?>" href="<?php echo site_url('Frecuencia/index')?>">Frecuencias</a></li>
           <li class="list-group-item"><a class="<?php if($enlaceActivoCatalogo=='Notificaciones'){echo 'mi-active';}?>" href="<?php echo site_url('Notificaciones/index')?>">Notificaciones</a></li>
           <li class="list-group-item"><a class="<?php if($enlaceActivoCatalogo=='Alumnos'){echo 'mi-active';}?>" href="<?php echo site_url('Alumnos/index')?>">Alumnos</a></li>
           <li class="list-group-item"><a class="<?php if($enlaceActivoCatalogo=='Teachers'){echo 'mi-active';}?>" href="<?php echo site_url('Teachers/index')?>">Teachers</a></li>
           <li class="list-group-item"><a class="<?php if($enlaceActivoCatalogo=='Cursos'){echo 'mi-active';}?>" href="<?php echo site_url('Cursos/index')?>">Cursos</a></li>
           </ul>
          </div>

           <hr class="linea" />
           
           <a data-toggle="collapse" href="#collapseModulos" role="button" aria-expanded="false" aria-controls="collapseModulos">
              <h2 class="titulos-menu">Modulos</h2>
           </a>

            <div class="<?php echo $collModulos;?>" id="collapseModulos">
           <ul class="list-group">
            <li class="list-group-item"><a class="<?php if($enlaceActivoModulo=='Grupos'){echo 'mi-active';}?>" href="<?php echo site_url('Grupos/index')?>">Grupos</a></li>  
            <li class="list-group-item"><a class="<?php if($enlaceActivoModulo=='Recursos'){echo 'mi-active';}?>" href="<?php echo site_url('Recursos/recursos')?>">Recursos</a></li> 
           </ul>
           </div>
           <hr class="linea" />