<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    private $store;
    public function __construct(Cliente $store)
    {
        $this->store = $store;
    }
    //***************************************** */
    public function index()
    {
        //
        $dados = $this->store::paginate(15);
        return $dados;
    }
    //***************************************** */
    public function store(Request $request)
    {
        //
        $dados = new Cliente();
        $dados->nome = $request->nome;
        $dados->telefone = $request->telefone;
        $dados->email = $request->email;
        $dados->cep = $request->cep;
        if($dados->save()){
            return $dados;
        }

    }

    public function show($id)
    {
        //
        $dados = $this->store->findOrFail($id);
        return $dados;
    }

    public function update(Request $request, $id)
    {
        //
        $dados = $this->store->findOrFail($id);
        $dados->nome = $request->nome;
        $dados->telefone = $request->telefone;
        $dados->email = $request->email;
        $dados->cep = $request->cep;
        if($dados->save()){
            return $dados;
        }
    }

    public function destroy($id)
    {
        //
        $dados = $this->store->findOrFail($id);
        if($dados->delete()){
            return $dados;
        }

    }
}
