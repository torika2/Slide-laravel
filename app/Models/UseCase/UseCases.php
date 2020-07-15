<?php

namespace App\Models\UseCase;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Activitylog\Traits\LogsActivity;

class UseCases extends Model
{
    use HasTranslations, LogsActivity;

    public $table = 'use_cases';
    public $timestamps = true;
    protected $fillable = [
        'id',
        'title',
        'meta_keywords',
        'meta_description',
        'short_text',
        'text',
        'video',
        'cover',
        'banner',
        'client_id',
        'industry_id',
        'created_at',
        'updated_at',
        'ord',
        'slug'
    ];
    public $translatable = [
        'title',
        'meta_keywords',
        'meta_description',
        'short_text',
        'text',
        'slug'
    ];

    protected static $logFillable = true;

    public function solutions(){
        return $this->belongsToMany('App\Models\Solutions\Solutions',
            'uc_solutions',
            'use_cases_id',
            'solutions_id');
    }


    public function client(){
        return $this->belongsTo('App\Models\Clients\Clients','client_id');
    }

    public function industry(){
        return $this->belongsTo('App\Models\UseCase\Industry','industry_id');
    }



}
