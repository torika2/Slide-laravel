<?php

namespace App\Models\FAQ;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Activitylog\Traits\LogsActivity;

class Tags extends Model
{
    use HasTranslations, LogsActivity;

    public $table = 'tutorial_tag';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'title',
        'slug',
        'ord',
    ];
    public $translatable = [
        'title',
        'slug',
    ];

    protected static $logFillable = true;

    public function tutorials(){
        return $this->hasMany('App\Models\FAQ\Tutorials','tag_id');
    }


}
