<?php

namespace App\Models\Solutions;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Activitylog\Traits\LogsActivity;

class Solutions extends Model
{
    use HasTranslations, LogsActivity;

    public $table = 'solutions';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'title',
        'icon',
        'ord',
        'text',
        'link'

    ];
    public $translatable = [
        'title',
        'text',
        'link'

    ];

    protected static $logFillable = true;


}
