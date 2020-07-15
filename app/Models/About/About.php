<?php

namespace App\Models\About;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Activitylog\Traits\LogsActivity;

class About extends Model
{
    use HasTranslations,LogsActivity;

    public $table = 'about';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'h1',
        'video',
        'title',
        'text',
        'image',
        'quote',
        'created_at',
        'updated_at',
    ];
    public $translatable = [
        'h1',
        'title',
        'text',
        'quote',
        ];

    protected static $logFillable = true;


}
