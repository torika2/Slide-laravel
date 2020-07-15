<?php

namespace App\Models\About;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Activitylog\Traits\LogsActivity;

class Teams extends Model
{
    use HasTranslations, LogsActivity;

    public $table = 'teams';
    public $timestamps = true;
    protected $fillable = [
        'id',
        'name',
        'position',
        'image',
        'ord',

    ];
    public $translatable = [
        'name',
        'position',
    ];

    protected static $logFillable = true;


}
