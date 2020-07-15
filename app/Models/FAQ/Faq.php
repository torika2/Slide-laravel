<?php

namespace App\Models\FAQ;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Activitylog\Traits\LogsActivity;

class Faq extends Model
{
    use HasTranslations, LogsActivity;

    public $table = 'faq';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'title',
        'text',
        'ord'
    ];
    public $translatable = [
        'title',
        'text',
    ];

    protected static $logFillable = true;


}
