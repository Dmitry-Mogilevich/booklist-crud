<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Book extends Model
{
    use HasFactory, HasApiTokens, Notifiable;

    protected $fillable = [
        'title',
        'img',
        'author',
        'description',
        'releasedate',
        'updated_at',
        'created_at',
    ];
}
