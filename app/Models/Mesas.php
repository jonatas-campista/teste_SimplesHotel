<?php

namespace App\Models;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesas extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $table = 'mesas';
    protected $fillable = ['status_mesa','cliente_por_mesa'];

    public function status(){
        if ($this->status_mesa == 0) {
            return 'DISPONIVEL';
        }elseif ($this->status_mesa == 1) {
            return 'OCUPADO';
        }else {
            return $this->status_mesa;
        } 
    }

    public function teste(){
        return $this->id .  ' | ' . $this->clientes_por_mesa;
    }

    public function mesas(){
        return $this->hasMany('App\Models\Movimentacao_mesas');
    }

     

}
