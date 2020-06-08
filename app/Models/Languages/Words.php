<?php

namespace App\Models\Languages;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Activitylog\Traits\LogsActivity;

class Words extends Model
{
    use HasTranslations;
    public $table = 'words';
    public $timestamps = false;
    protected $fillable = [
        'key', 'locale', 'value'
    ];
    public $translatable = ['value'];

}
