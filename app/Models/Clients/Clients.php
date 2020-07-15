<?php

namespace App\Models\Clients;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Activitylog\Traits\LogsActivity;

class Clients extends Model
{
    use HasTranslations, LogsActivity;

    public $table = 'clients';
    public $timestamps = true;
    protected $fillable = [
        'id',
        'logo',
        'name',
        'web',
        'block',
        'ord',

    ];
    public $translatable = [
        'name',
    ];

    protected static $logFillable = true;


}
