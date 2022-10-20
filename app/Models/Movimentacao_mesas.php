<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimentacao_mesas extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'vendas';
    protected $fillable = ['quantidade','movimentacao_id_mesa','movimentacao_id_produto'];

    public function mesas(){
        return $this->belongsTo('App\Models\Mesa');
    }
    public function venda(){
        return $this->belongsTo('App\Models\Vendas');
    }

    public function produto(){
        return $this->belongsTo('App\Models\Produtos');
    }
}
