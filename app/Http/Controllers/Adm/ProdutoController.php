<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProdutoStoreRequest;
use App\Models\Fornecedor;
use App\Models\Item;
use App\Models\Produto;
use App\Models\ProdutoDetalhe;
use App\Models\Unidade;
use App\Models\UnidadeMedida;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function __construct(
        protected Fornecedor $fornecedor,
        protected Item $item,
        protected Produto $produto,
        protected ProdutoDetalhe $produtoDetalhe,
        protected UnidadeMedida $unidadeMedida
    ) {
        $this->fornecedor = $fornecedor;
        $this->produto = $produto;
        $this->produtoDetalhe = $produtoDetalhe;
        $this->unidadeMedida = $unidadeMedida;
    }

    public function index()
    {
        $produtos = $this->item->with(['itemDetalhe', 'fornecedor'])->paginate(10);

        return view(
            'adm.pages.produto.index',
            [
                'pageTitle' => 'Produtos',
                'produtos' => $produtos
            ]
        );
    }


    public function create()
    {
        $unidadesMedida = $this->unidadeMedida->all();
        $fornecedores = $this->fornecedor->all();

        return view(
            'adm.pages.produto.create',
            [
                'pageTitle' => 'Adicionar',
                'unidadesMedida' => $unidadesMedida,
                'fornecedores' => $fornecedores
            ]
        );
    }


    public function store(ProdutoStoreRequest $request)
    {
        $this->produto->create($request->all);

        redirect()->route('produto.index');
    }


    public function show(Produto $produto)
    {
        return view(
            'adm.pages.produto.show',
            [
                'pageTitle' => 'Exibir',
                'produto' => $produto
            ]
        );
    }


    public function edit(Produto $produto)
    {
        $unidadesMedida = $this->unidadeMedida->all();
        $fornecedores = $this->fornecedor->all();

        return view(
            'adm.pages.produto.edit',
            [
                'pageTitle' => 'Editar',
                'produto' => $produto,
                'unidadesMedida' => $unidadesMedida,
                'fornecedores' => $fornecedores
            ]
        );
    }


    public function update(Request $request, Produto $produto)
    {
        $produto->update($request->all());

        return redirect()->route('produtos.show', ['produto' => $produto->id]);
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();

        return redirect()->route('produtos.index');
    }
}
