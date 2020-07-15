<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Activitylog\Traits\LogsActivity;

class Head extends Model
{
    use HasTranslations, LogsActivity;

    public $table = 'home_head';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'title',
        'description',
        'image',
        'video',
        'button',
        'link',
    ];
    public $translatable = [
        'title',
        'description',
        'button',
        'link',
    ];

    protected static $logFillable = true;


}
