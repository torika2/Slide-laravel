<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Activitylog\Traits\LogsActivity;

class Details extends Model
{
    use HasTranslations, LogsActivity;

    public $table = 'product_details';
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
