<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Activitylog\Traits\LogsActivity;

class WelyHube extends Model
{
    use HasTranslations, LogsActivity;

    public $table = 'wely_hube';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'title',
        'description',
        'image',
        'link',
        'ord',
    ];
    public $translatable = [
        'description',
        'title',
        'link',
    ];

    protected static $logFillable = true;


}
