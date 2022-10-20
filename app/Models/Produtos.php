<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'produtos';
    protected $fillable = ['descricao','preco_venda'];

    public function produto(){
        return $this->hasMany('App\Models\Movimentacao_mesas');
    }
}
