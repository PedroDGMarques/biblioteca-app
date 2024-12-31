<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'genero',
        'idioma',
        'isbn',
        'ano',
        'historia',
        'capa',
        'autor_id',
    ];
    
    public function autor()
{
    return $this->belongsTo(Author::class, 'autor_id');
}
}
