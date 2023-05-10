<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\Http\Requests\FornecedorStoreRequest;
use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function __construct(protected Fornecedor $fornecedor)
    {
        $this->fornecedor = $fornecedor;
    }

    public function index()
    {
        return view('adm.pages.fornecedor.index',  ['pageTitle' => 'Fornecedores']);
    }

    public function listar(FornecedorStoreRequest $request)
    {
        $fornecedor = $this->fornecedor->with(['produtos'])->findByNomeSiteEstadoeEmail($request('nome'), $request('site'), $request('uf'), $request('email'));

        return view(
            'adm.pages.fornecedor.listar',
            [
                'pageTitle' => 'Fornecedores - Listar',
                'fornecedores' => $fornecedor
            ]
        );
    }

    public function adicionar(FornecedorStoreRequest $request)
    {
        if (empty($request->input('_token'))) {
            return view('adm.pages.fornecedor.adicionar',  ['pageTitle' => 'Fornecedores - Adicionar', 'mensagem' => 'O Cadastro não foi realizado.']);
        }

        if (empty($request->input('_token')) && !empty($request->input('id'))) {
        }

        if (!empty($request->input('_token')) && !empty($request->input('id'))) {
            $fornecedor = $this->fornecedor->find($request->input('id'));
            // $update = $fornecedor->update($request->all());
            if (!$update = $fornecedor->update($request->all())) {
                $mensagem = 'Erro ao tentar realizar o registro';
            }

            $mensagem = 'Atualização realizada com sucesso!';

            return redirect(
                'adm.pages.fornecedor.adicionar',
                [
                    'pageTitle' => 'Fornecedores - Adicionar',
                    'mensagem' => $mensagem,
                    'id' => $request->input('id')
                ]
            );
        }

        $this->fornecedor->create($request->all());
        $mensagem = 'Cadastro realizado com sucesso!';

        return view(
            'adm.pages.fornecedor.adicionar',
            [
                'pageTitle' => 'Fornecedores - Adicionar',
                'mensagem' => $mensagem
            ]
        );
    }

    public function editar($id, $mensagem = '')
    {
        $fornecedor = $this->fornecedor->find($id);

        return view(
            'app.pages.fornecedor.adicionar',
            [
                'fornecedor' => $fornecedor,
                'mensagem' => $mensagem
            ]
        );
    }

    public function excluir($id)
    {
        $this->fornecedor->find($id)->delete();

        return redirect()->route('app.fornecedor');
    }
}
