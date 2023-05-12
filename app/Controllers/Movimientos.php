<?php

namespace App\Controllers;
use  App\Models\Movimientos_model;
class Movimientos extends BaseController
{
    public function index()
    {
        $data['page_title'] = "Movimientos";	
        $model = new Movimientos_model($this->db);
        $movimientos = $model->withDeleted()->paginate(10);
        $paginador = $model->pager;
        $paginador->setPath('/rinku/Movimientos/index/');
        
        $data = ['movimientos'=>$movimientos,
        'paginador'=>$paginador
        ];
        return view('movimientos',$data);
    }
    public function agregarmovimiento()
    {
        $data['page_title'] = "Agregar un Movimiento";
        return view('agregarmovimiento',$data);
    }
    
    
    public function insertarMovimiento()
	{

        if(isset($_POST['submitaddmovimiento'])){

            $REQUEST = \Config\Services::request();
            $hoy = date("Y-m-d H:i:s");

            $data = ['numempleado' =>$REQUEST->getPost('numempleado'),
                'nombre' =>$REQUEST->getPost('nombre'),
            'id_rol' =>$REQUEST->getPost('rol'),
            'mes' =>$REQUEST->getPost('mes'),
            'num_entregas' =>$REQUEST->getPost('num_entregas'),
            'fecha_creacion' =>$hoy,
            'fecha_ultimo_cambio' =>$hoy
            ];

            $empleadomodel = new Movimientos_model($this->db);
            try {
                $empleadomodel->insert($data);
            } catch (\Exception  $e) {
                $data = ['Movimiento'  => 'Hubo un error, no se pudo agregar el movimiento'];
                $this->session->set($data,true);
                return redirect()->to(site_url('Movimientos/agregarmovimiento'));
            }
            

            $data = ['Movimiento'  => 'El Movimiento se agregro correctamente'];
            $this->session->set($data,true);

            return redirect()->to(site_url('Movimientos/agregarmovimiento'));
        }

    }

    public function ObtenerDatosEmpleado()
    {
        $REQUEST = \Config\Services::request();
        $numempleado = $REQUEST->getPost('numempleado');
        
        $empleado = getDatosEmpleadoEspecifico($numempleado);
        $data['nombre'] = $empleado->nombre;
        $data['rol'] = $empleado->id_rol; 


        $Datos = $data['nombre'].'-'.$data['rol'];
        echo $Datos;
        //echo  "<input type=text id=No.Semanas class=form-control form-control-sm value= $Rango>";

        
        
    }

    
}

