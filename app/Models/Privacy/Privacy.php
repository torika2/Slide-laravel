<?php

namespace App\Models\Privacy;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Activitylog\Traits\LogsActivity;

class Privacy extends Model
{
    use HasTranslations, LogsActivity;

    public $table = 'privacy';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'title',
        'text'

    ];
    public $translatable = [
        'title',
        'text'
    ];

    protected static $logFillable = true;


}
