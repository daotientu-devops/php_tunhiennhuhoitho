<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'title',
        'name',
        'file',
        'position',
        'user_id'
    ];
}
