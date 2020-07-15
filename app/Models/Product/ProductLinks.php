<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class ProductLinks extends Model
{
    use LogsActivity;

    public $table = 'product_links';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'product_id',
        'image',
        'link',
        'ord',
        'title'
    ];


}
