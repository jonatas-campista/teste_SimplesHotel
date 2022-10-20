<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'vendas';
    protected $fillable = ['tipo_pagamento','valor_total','vendas_id_mesa'];
}
