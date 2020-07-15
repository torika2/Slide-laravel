<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Activitylog\Traits\LogsActivity;

class AdvantageStatic extends Model
{
    use HasTranslations, LogsActivity;

    public $table = 'advantage_static';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'image1',
        'image2',
        'image3',
        'button',
        'link',
    ];
    public $translatable = [
        'button',
        'link',
    ];

    protected static $logFillable = true;


}
