<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\Models\Pedido;
use App\Models\PedidoProduto;
use App\Models\Produto;
use Illuminate\Http\Request;

class PedidoProdutoController extends Controller
{
    public function __construct(
        protected Pedido $pedido,
        protected PedidoProduto $pedidoProduto,
        protected Produto $produto
    ) {
        $this->pedido = $pedido;
        $this->pedidoProduto = $pedidoProduto;
        $this->produto = $produto;
    }

    public function index()
    {
        //
    }

    public function create()
    {
        $pedido = $this->pedido->id;
        $produtos = $this->produto->all();

        return view('adm.pages.pedido-produto.create', ['pedido' => $pedido, 'produtos' => $produtos]);
    }

    public function store(Request $request, Pedido $pedido)
    {
        // $this->pedidoProduto->create($request->all());

        $this->pedido->produtos()->attach(
            $request->get('produto_id'),
            [
                'quantidade' => $request->get('quantidade')
            ]
        );

        return redirect()->route('pedidos_produtos.create', ['pedido' => $pedido]);
    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
    }

    public function update(Request $request, string $id)
    {
    }

    // public function destroy(Pedido $pedido, Produto $produto)
    public function destroy(PedidoProduto $pedidoProduto, $pedido_id)
    {
        $pedidoProduto->delete();
        // $this->pedidoProduto->where([
        //     'pedido_id' => $pedido->id,
        //     'produto_id' => $produto->id,
        // ])->delete();

        // detach
        // $pedido->produtos()->detach($produto->id);

        return redirect()->route('pedidos-produtos.create', ['pedido' =>  $pedido_id]);
    }
}
