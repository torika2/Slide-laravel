<?php

namespace App\Models\Software;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Activitylog\Traits\LogsActivity;

class PricingParams extends Model
{
    use HasTranslations, LogsActivity;

    public $table = 'pricing_params';
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
