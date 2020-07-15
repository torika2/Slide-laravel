<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Activitylog\Traits\LogsActivity;

class SoftwareComponent extends Model
{
    use HasTranslations, LogsActivity;

    public $table = 'home_software';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'image',
        'title',
        'text',
        'button1',
        'link1',
        'button2',
        'link2',
    ];
    public $translatable = [
        'title',
        'text',
        'button1',
        'link1',
        'button2',
        'link2',
    ];

    protected static $logFillable = true;


}
