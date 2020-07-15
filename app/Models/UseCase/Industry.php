<?php

namespace App\Models\UseCase;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Activitylog\Traits\LogsActivity;

class Industry extends Model
{
    use HasTranslations, LogsActivity;

    public $table = 'uc_industry';
    public $timestamps = true;
    protected $fillable = [

        'id',
        'cover',
        'name',
        'text',
        'slug',
        'ord',
        'created_at',
        'updated_at',
    ];
    public $translatable = [
        'name',
        'text',
        'slug',
    ];

    protected static $logFillable = true;


}
