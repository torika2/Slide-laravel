<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
 use Spatie\Activitylog\Traits\LogsActivity;

class ProductImages extends Model
{
    use LogsActivity;

    public $table = 'product_images';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'product_id',
        'image',
        'ord',
    ];




}
