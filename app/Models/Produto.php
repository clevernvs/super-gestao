<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'produtos';

    protected $fillable = ['nome', 'descricao', 'peso', 'unidade_id', 'preco_venda'];

    // Produto tem 1 ProdutoDetalhe
    public function produtoDetalhe()
    {
        return $this->hasOne(ProdutoDetalhe::class);
    }
}
