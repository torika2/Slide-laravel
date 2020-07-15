<?php

namespace App\Models\Projects;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Activitylog\Traits\LogsActivity;

class Tags extends Model
{
    use HasTranslations, LogsActivity;

    public $table = 'project_tags';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'title',
        'ord',

    ];
    public $translatable = [
        'title',

    ];

    protected static $logFillable = true;


}
