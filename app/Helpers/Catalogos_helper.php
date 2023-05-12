<?php 
use  App\Models\Empleados_model;



function getEmpleadoEspecifico($id)
{
    $db = \Config\Database::connect();
    $usermode = new Empleados_model($db);
    $usermode->select('numempleado,nombre,apellidoPaterno,apellidoMaterno,id_rol');
    $usermode->where('deleted',null);
    $usermode->where('id',$id);
    $resultado = $usermode->get();
    $row = $resultado->getRow();
    return($row);
}

function getDatosEmpleadoEspecifico($numempleado)
{
    $db = \Config\Database::connect();
    $usermode = new Empleados_model($db);
    $usermode->select('nombre,id_rol');
    $usermode->where('numempleado',$numempleado);
    $resultado = $usermode->get();
    $row = $resultado->getRow();
    return($row);
}


?>