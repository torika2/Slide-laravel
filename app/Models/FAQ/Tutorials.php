<?php

namespace App\Models\FAQ;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Activitylog\Traits\LogsActivity;

class Tutorials extends Model
{
    use HasTranslations, LogsActivity;

    public $table = 'tutorials';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'tag_id',
        'title',
        'text',
        'meta_keywords',
        'meta_description',
        'slug',
        'ord',
        'created_at',
        'updated_at',
    ];
    public $translatable = [
        'title',
        'text',
        'meta_keywords',
        'meta_description',
        'slug',
    ];

    protected static $logFillable = true;

    public function tag(){
        return $this->belongsTo('App\Models\FAQ\Tags','tag_id');
    }


}
