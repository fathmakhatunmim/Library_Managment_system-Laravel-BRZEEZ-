<?php

namespace App\Models;
use App\Models\dash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Review extends Model
{
            use HasFactory;

    protected $table = '_review';

    protected $fillable = [
        'uname',
        'name',
        'author',
        'isbn',
        'categories',
        'review'
    ];
     public $timestamps = false;
}
