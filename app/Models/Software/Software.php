<?php

namespace App\Models\Software;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Activitylog\Traits\LogsActivity;

class Software extends Model
{
    use HasTranslations, LogsActivity;

    public $table = 'software';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'title',
        'text1',
        'meta_keywords',
        'meta_description',
        'cover',
        'title2',
        'text2',
        'cover2',
    ];
    public $translatable = [
        'title',
        'text1',
        'meta_keywords',
        'meta_description',
        'title2',
        'text2'
    ];

    protected static $logFillable = true;


}
