<?php namespace App\Models;

use CodeIgniter\Model;

class Empleados_model extends Model
{
    #Nombre de la tabla
    protected $table      = 'empleados';
    #nombre de la clave primaria 
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    #Aqui ponemos el nombre de las columnas que vamos a modifcar
    protected $allowedFields = ['numempleado','nombre','apellidoPaterno','apellidoMaterno','id_rol','fecha_creacion','fecha_ultimo_cambio','deleted'];

    protected $useTimestamps = false;
    protected $createdField  = 'fecha_creacion';
    protected $updatedField  = 'fecha_ultimo_cambio';
    protected $deletedField  = 'deleted';

    #Reglas de validacion 
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}