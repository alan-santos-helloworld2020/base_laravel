<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;

class HomeController extends Controller
{
    private $tore;
    public function __construct(Cliente $store)
    {
        $this->store  = $store;
    }
    //
    public function Index(){
        
        return view("index")
        ->with("title","home");
       
    }
    public function Cadastro(){
        
        return view("cadastro")
        ->with("title","cadastro");
       
    }
    public function Clientes(){
        $dados = $this->store->get();
        return view("clientes")
        ->with("title","clientes")
        ->with("dados",$dados);
    }
}
