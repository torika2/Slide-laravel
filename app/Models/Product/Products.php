<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Activitylog\Traits\LogsActivity;

class Products extends Model
{
    use HasTranslations, LogsActivity;

    public $table = 'products';
    public $timestamps = true;
    protected $fillable = [
        'id',
        'price',
        'sale_price',
        'stock',
        'title',
        'meta_description',
        'meta_keywords',
        'short_text',
        'text',
        'description',
        'cover',
        'ord',
        'slug',
        'created_at',
        'updated_at',
    ];
    public $translatable = [
        'title',
        'meta_description',
        'meta_keywords',
        'short_text',
        'text',
        'description',
        'slug',
        'details',
    ];

    protected static $logFillable = true;


    public function images()
    {
        return $this->hasMany('App\Models\Product\ProductImages','product_id');
    }

    public function links()
    {
        return $this->hasMany('App\Models\Product\ProductLinks','product_id')
            ->orderBy('ord','ASC');
    }

}
