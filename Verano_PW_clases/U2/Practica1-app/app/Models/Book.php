<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'revista';
    protected $fillable = ['name', 'stock', 'price'];
    protected $hidden = ['created_at', 'updated_at'];


}
