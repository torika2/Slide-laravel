<?php

namespace App\Models\Partners;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Activitylog\Traits\LogsActivity;

class Partners extends Model
{
    use HasTranslations, LogsActivity;

    public $table = 'partners';
    public $timestamps = true;
    protected $fillable = [
        'id',
        'name',
        'address',
        'phone',
        'email',
        'web',
        'linkname',
        'ord'
    ];
    public $translatable = [
        'name',
        'address',
    ];

    protected static $logFillable = true;


}
