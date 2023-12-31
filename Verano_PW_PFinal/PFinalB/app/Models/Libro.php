<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    protected $table = 'Libro';
    protected $fillable = ['titulo', 'isbn'];
    protected $hidden = ['created_at', 'updated_at'];
}
