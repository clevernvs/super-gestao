<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClienteStoreRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function __construct(protected Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function index()
    {
        $clientes = $this->cliente->paginate(10);

        return view('adm.pages.cliente.index', ['clientes' => $clientes]);
    }

    public function create()
    {
        return view('adm.pages.cliente.create');
    }

    public function store(ClienteStoreRequest $request)
    {
        $this->cliente->create($request->all());

        return redirect()->route('clientes.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
