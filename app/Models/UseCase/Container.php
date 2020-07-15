<?php

namespace App\Models\UseCase;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Activitylog\Traits\LogsActivity;

class Container extends Model
{
    use HasTranslations, LogsActivity;

    public $table = 'use_case_container';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'title',
        'tab_name',
        'text',
        'link',
        'cover',
        'ord',
    ];
    public $translatable = [
        'title',
        'tab_name',
        'text',
        'link',
    ];

    protected static $logFillable = true;



}
