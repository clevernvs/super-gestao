<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;

    protected $table = 'fornecedores';
    protected $fillable = ['nome', 'site', 'uf', 'email'];

    public function findByNomeSiteEstadoeEmail($nome, $site, $uf, $email)
    {
        // return $this->where('nome', 'like', '%' . $nome . '%')
        //     ->where('site', 'like', '%' . $site . '%')
        //     ->where('uf', 'like', '%' . $uf . '%')
        //     ->where('email', 'like', '%' . $email . '%')
        //     ->get();
        return $this->where('nome', 'like', '%' . $nome . '%')
            ->where('site', 'like', '%' . $site . '%')
            ->where('uf', 'like', '%' . $uf . '%')
            ->where('email', 'like', '%' . $email . '%')
            ->paginate(10);
    }

    public function produtos()
    {
        return $this->hasMany(Item::class, 'fornecedor_id', 'id');
    }
}
