<?php

namespace App\Models\Languages;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Locales extends Model
{
    use LogsActivity;
    public $table = 'locales';
    public $timestamps = true;

    protected $fillable = [
        'active', 'default', 'name','locale'
    ];

    protected static $logAttributes = ['active', 'default', 'name','locale'];
}
