<?php

namespace App\Models\Seo;

use Spatie\Translatable\HasTranslations;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use HasTranslations, LogsActivity;

    public $table = 'seo';
    public $timestamps = true;

    public $translatable = [
        'title',
        'meta_keywords',
        'meta_description',
        'image'
    ];
    protected $fillable = [
        'title',
        'meta_keywords',
        'meta_description',
        'image',
        'module',
    ];
    protected static $logFillable = true;
}
