<?php

namespace App\Controllers;
use  App\Models\Empleados_model;
class Empleados extends BaseController
{
    public function index()
    {
        $data['page_title'] = "Empleados";	
        $model = new Empleados_model($this->db);
        $empleados = $model->withDeleted()->paginate(10);
        $paginador = $model->pager;
        $paginador->setPath('/rinku/Empleados/index/');
        
        $data = ['empleados'=>$empleados,
        'paginador'=>$paginador
        ];
        return view('empleados',$data);
    }

    public function agregarempleado()
	{
        $data['page_title'] = "Agregar un Empleado";
        return view('agregarempleado',$data);

    }

    public function insertarEmpleado()
	{
        
        if(isset($_POST['submitaddempleado'])){

            $REQUEST = \Config\Services::request();
            $hoy = date("Y-m-d H:i:s");

            $data = ['numempleado' =>$REQUEST->getPost('num_empleado'),
                'nombre' =>$REQUEST->getPost('nombre'),
            'apellidoPaterno' =>$REQUEST->getPost('apellidoPaterno'),
            'apellidoMaterno' =>$REQUEST->getPost('apellidoMaterno'),
            'id_rol' =>$REQUEST->getPost('rol'),
            'fecha_creacion' =>$hoy,
            'fecha_ultimo_cambio' =>$hoy
            ];

            $empleadomodel = new Empleados_model($this->db);
            try {
                $empleadomodel->insert($data);
            } catch (\Exception  $e) {
                $data = ['Empleado'  => 'Hubo un error, no se pudo agregar el empleado'];
                $this->session->set($data,true);
                return redirect()->to(site_url('Empleados/agregarempleado'));
            }
            

            $data = ['Empleado'  => 'El Empleado se agregro correctamente'];
            $this->session->set($data,true);

            return redirect()->to(site_url('Empleados/agregarempleado'));
        }

    }
    

}

