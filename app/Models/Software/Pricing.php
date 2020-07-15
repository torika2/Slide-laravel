<?php

namespace App\Models\Software;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Activitylog\Traits\LogsActivity;

class Pricing extends Model
{
    use HasTranslations, LogsActivity;

    public $table = 'software_pricing';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'popular',
        'title',
        'm_price',
        'y_price',
        'link',
        'params',
        'ord',
        'created_at',
        'updated_at',
    ];
    public $translatable = [
        'title',
        'link',
    ];

    protected static $logFillable = true;


    protected $casts = [
        'params' => 'array'
    ];
}
