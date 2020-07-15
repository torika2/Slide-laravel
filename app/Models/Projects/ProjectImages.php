<?php

namespace App\Models\Projects;

use Illuminate\Database\Eloquent\Model;


class ProjectImages extends Model
{


    public $table = 'project_images';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'projects_id',
        'image',
        'ord',

    ];




}
