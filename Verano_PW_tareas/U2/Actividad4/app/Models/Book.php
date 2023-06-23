<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'Libro';
    protected $fillable = ['name', 'author','stock', 'price'];
    protected $hidden = ['created_at', 'updated_at'];
}
