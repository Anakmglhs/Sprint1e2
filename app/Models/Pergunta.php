<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pergunta extends Model
{
    use HasFactory;

    protected $fillable = ['evento_id', 'user_id', 'texto', 'status'];

    /**
     * Relacionamento com o Evento.
     */
    public function evento(): BelongsTo
    {
        return $this->belongsTo(Evento::class);
    }

    /**
     * TICKET #003: Relacionamento com o Usuário autor da pergunta.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}