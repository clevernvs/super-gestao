<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\Models\ItemDetalhe;
use App\Models\ProdutoDetalhe;
use App\Models\UnidadeMedida;
use Illuminate\Http\Request;

class ProdutoDetalheController extends Controller
{
    public function __construct(
        protected ItemDetalhe $itemDetalhe,
        protected ProdutoDetalhe $produtoDetalhe,
        protected UnidadeMedida $unidadeMedida
    ) {
        $this->produtoDetalhe = $produtoDetalhe;
        $this->unidadeMedida = $unidadeMedida;
    }

    public function index()
    {
        //
    }

    public function create()
    {
        $unidadesMedida = $this->unidadeMedida->all();

        return view('adm.produto_detalhe.create', ['pageTitle' => 'Adicionar Detalhes do Produto', 'unidadesMedida' => $unidadesMedida]);
    }

    public function store(Request $request)
    {
        $this->produtoDetalhe->create($request->all());
    }

    public function show(ProdutoDetalhe $produtoDetalhe)
    {
        //
    }

    public function edit($id)
    {
        $produtoDetalhe = $this->itemDetalhe->with(['item'])->find($id);
        $unidadesMedida = $this->unidadeMedida->all();

        return view(
            'adm.produto_detalhe.edit',
            [
                'pageTitle' => 'Editar Detalhes do Produto',
                'produtoDetalhe' => $produtoDetalhe,
                'unidadesMedida' => $unidadesMedida
            ]
        );
    }

    public function update(Request $request, ProdutoDetalhe $produtoDetalhe)
    {
        $this->produtoDetalhe->update($request->all());
    }

    public function destroy(ProdutoDetalhe $produtoDetalhe)
    {
        //
    }
}
