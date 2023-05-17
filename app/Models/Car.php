<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Car as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Car extends Model
{
    use HasFactory, HasApiTokens, Notifiable;
    protected $fillable = [
        'id',
        'name',
        'price',
        'description',
        'company',
        'mainImage',
        'image1',
        'image2',
        'image3',
        'manufacture'
    ];
    protected $hidden = [];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [];
}
