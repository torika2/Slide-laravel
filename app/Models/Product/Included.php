<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Activitylog\Traits\LogsActivity;

class Included extends Model
{
    use HasTranslations, LogsActivity;

    public $table = 'product_included';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'name',
        'text',
        'button',
        'link',
        'ord'
    ];
    public $translatable = [
        'name',
        'text',
        'button',
        'link',
    ];

    protected static $logFillable = true;


}
