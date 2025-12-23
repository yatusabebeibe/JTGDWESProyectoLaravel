<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    protected $table = 'publicaciones';
    use HasFactory;

    protected $fillable = ["titulo", "cuerpo", "id_usuario"];

    public function usuario() {
        return $this->belongsTo(User::class, "id_usuario");
    }
}
