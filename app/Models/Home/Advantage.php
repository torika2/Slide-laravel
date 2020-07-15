<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Activitylog\Traits\LogsActivity;

class Advantage extends Model
{
    use HasTranslations, LogsActivity;

    public $table = 'advantage';
    public $timestamps = true;
    protected $fillable = [
        'id',
        'title',
        'description',
        'ord',
    ];
    public $translatable = [
        'title',
        'description',
    ];

    protected static $logFillable = true;


}
