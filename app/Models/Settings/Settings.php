<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Activitylog\Traits\LogsActivity;

class Settings extends Model
{
    use HasTranslations,LogsActivity;
    public $table = 'settings';
    public $timestamps = false;
    protected $fillable = [
        'key','value','data'
    ];

    public $translatable = ['value'];

    protected static $logAttributes = ['key', 'value','data'];
    protected $casts = [
        'data' => 'array'
    ];
}
