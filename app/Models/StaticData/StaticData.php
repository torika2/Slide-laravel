<?php

namespace App\Models\StaticData;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Activitylog\Traits\LogsActivity;

class StaticData extends Model
{
    use HasTranslations, LogsActivity;

    public $table = 'static';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'h1',
        'banner',
        'module',

    ];
    public $translatable = [
        'h1',
    ];

    protected static $logFillable = true;


}
