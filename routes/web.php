<?php

use App\Http\Controllers\Adm\{
    ClienteController,
    FornecedorController,
    HomeController as AdmHomeController,
    PedidoController,
    PedidoProdutoController,
    ProdutoController,
    ProdutoDetalheController
};

use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\Site\{
    ContatoController,
    HomeController,
    SobreNosController
};

use Illuminate\Support\Facades\Route;


// Route::get('/', [HomeController::class, 'index'])->name('site.index')->middleware('log.acesso');
Route::get('/', [HomeController::class, 'index'])->name('site.index');

Route::get('/sobre-nos', [SobreNosController::class, 'index'])->name('site.sobrenos');

Route::get('/contato', [ContatoController::class, 'index'])->name('site.contato');
Route::post('/contato', [ContatoController::class, 'store'])->name('site.contato');

Route::get('/login/{error?}', [LoginController::class, 'index'])->name('site.login');
Route::post('/login', [LoginController::class, 'autenticar'])->name('site.login');

Route::middleware('autenticacao')->prefix('/adm')->group(function () {
    Route::get('/home', [AdmHomeController::class, 'index'])->name('adm.index');
    Route::get('/sair', [LoginController::class, 'index'])->name('adm.sair');

    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('adm.fornecedor');
    Route::post('/fornecedores/listar', [FornecedorController::class, 'listar'])->name('adm.fornecedor.listar');
    Route::get('/fornecedores/listar', [FornecedorController::class, 'listar'])->name('adm.fornecedor.listar');
    Route::get('/fornecedores/adicionar', [FornecedorController::class, 'adicionar'])->name('adm.fornecedor.adicionar');
    Route::post('/fornecedores/adicionar', [FornecedorController::class, 'adicionar'])->name('adm.fornecedor.adicionar');
    Route::get('/fornecedores/editar/{id}/{mensagem?}', [FornecedorController::class, 'editar'])->name('adm.fornecedor.editar');
    Route::get('/fornecedores/excluir/{id}', [FornecedorController::class, 'excluir'])->name('adm.fornecedor.excluir');

    Route::resource('/produtos', ProdutoController::class);

    Route::resource('/produtos-detalhes', ProdutoDetalheController::class);

    Route::resource('/clientes', ClienteController::class);

    Route::resource('/pedidos', PedidoController::class);

    // Route::resource('/pedidos-produtos', PedidoProdutoController::class);
    Route::get('/pedidos-produtos/create/{pedido}', [PedidoProdutoController::class, 'create'])->name('pedidos-produtos.create');
    Route::post('/pedidos-produtos/{pedido}', [PedidoProdutoController::class, 'store'])->name('pedidos-produtos.store');
    // Route::delete('/pedidos-produtos/destroy/{pedido}/{produto}', [PedidoProdutoController::class, 'destroy'])->name('pedidos-produtos.destroy');
    Route::delete('/pedidos-produtos/destroy/{pedidoProduto}/{pedido_id}', [PedidoProdutoController::class, 'destroy'])->name('pedidos-produtos.destroy');
});
