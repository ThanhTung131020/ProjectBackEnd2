<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class people extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'phone',
        'email',
        'message',
        'create_at',
        'update_at'


    ];
}
