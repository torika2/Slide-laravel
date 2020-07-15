<?php

namespace App\Models\Menu;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Activitylog\Traits\LogsActivity;

class Menu extends Model
{
    use HasTranslations, LogsActivity;

    public $table = 'menu';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'module_id',
        'title',
        'link',
        'ord',
    ];
    public $translatable = [
        'title',
        'link',
    ];

    protected static $logFillable = true;

    public function module()
    {
        return $this->belongsTo('App\Models\Modules','module_id');
    }

}
