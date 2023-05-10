<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'produtos';

    protected $fillable = ['nome', 'descricao', 'peso', 'unidade_id', 'preco_venda'];

    // Produto tem 1 ProdutoDetalhe
    public function itemDetalhe()
    {
        return $this->hasOne(ItemDetalhe::class, 'produto_id', 'id');
    }

    // Fornecedor pertence a Produto
    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class);
    }
}
