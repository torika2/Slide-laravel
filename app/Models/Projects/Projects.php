<?php

namespace App\Models\Projects;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Activitylog\Traits\LogsActivity;

class Projects extends Model
{
    use HasTranslations, LogsActivity;

    public $table = 'projects';
    public $timestamps = true;
    protected $fillable = [
        'id',
        'cover',
        'title',
        'text',
        'date',
        'client_id',
        'meta_keywords',
        'meta_description',
        'slug',
        'ord',

    ];
    public $translatable = [
        'title',
        'text',
        'meta_keywords',
        'meta_description',
        'slug'
    ];

    protected static $logFillable = true;

    public function tags(){
        return $this->belongsToMany('App\Models\Projects\Tags','pro_tags','project_id','tags_id');
    }

    public function solutions(){
        return $this->belongsToMany('App\Models\Solutions\Solutions',
            'projects_solution',
            'project_id',
            'solution_id');
    }

    public function client(){
        return $this->belongsTo('App\Models\Clients\Clients','client_id');
    }

    public function images(){
        return $this->hasMany('App\Models\Projects\ProjectImages','projects_id');
    }


}
