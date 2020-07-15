<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Modules extends Model
{

    public $table = 'modules';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'name',
    ];


}
