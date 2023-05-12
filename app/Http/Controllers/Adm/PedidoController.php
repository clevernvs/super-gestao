<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\Http\Requests\PedidoStoreRequest;
use App\Models\Cliente;
use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function __construct(protected Pedido $pedido, protected Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function index()
    {
        $pedidos = $this->pedido->paginate(10);

        return view('adm.pages.pedido.index', ['pedidos' => $pedidos]);
    }

    public function create()
    {
        $clientes = $this->cliente->all();

        return view('adm.pages.pedido.create', ['clientes' => $clientes]);
    }

    public function store(PedidoStoreRequest $request)
    {
        $this->pedido->create($request->all());

        return redirect()->route('pedidos.index');
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
