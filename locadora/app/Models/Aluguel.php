<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluguel extends Model
{
    use HasFactory;

     protected $table = 'alugueis';

        protected $fillable = [
            'usuario_id',
            'carro_id',
            'data_inicio',
            'data_final_prevista',
            'data_final_entregue',
            'status'
        ];
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function carro()
    {
        return $this->belongsTo(Carro::class);
    }
}

