<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['page_title'] = "Pagina principal de Rinku";
        return view('principal',$data);
    }

    public function salir(){
        $this->session->session_destroy();
        return redirect()->to(site_url('Home/index'));
    }
}
