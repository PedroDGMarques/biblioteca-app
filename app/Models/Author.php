<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    
    protected $table = 'autores';

    protected $fillable = [
        'nome',
        'apelido',
        'pais',
    ];
    
    public function livros()
{
    return $this->hasMany(Book::class, 'autor_id');
}
}
