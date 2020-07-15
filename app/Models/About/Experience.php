<?php

namespace App\Models\About;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Activitylog\Traits\LogsActivity;

class Experience extends Model
{
    use HasTranslations, LogsActivity;

    public $table = 'experience';
    public $timestamps = true;
    protected $fillable = [
        'id',
        'tab',
        'title',
        'text',
        'ord',
        'image'
    ];
    public $translatable = [
        'tab',
        'title',
        'text',
    ];

    protected static $logFillable = true;


}
