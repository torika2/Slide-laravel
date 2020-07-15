<?php

namespace App\Models\Menu;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Activitylog\Traits\LogsActivity;

class Footer extends Model
{
    use HasTranslations, LogsActivity;

    public $table = 'footer_menu';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'title',
        'link',
        'column_id',
        'ord',
    ];
    public $translatable = [
        'title',
        'link',
    ];

    protected static $logFillable = true;


}
