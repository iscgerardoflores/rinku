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

    
}

