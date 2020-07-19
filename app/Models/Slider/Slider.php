<?php

namespace App\Models\Slider;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    
	protected $fillable = [
	   'slider_id',
	   'first_title',
	   'second_title',
	   'text',
	   'image',
	   'created_at',
	   'updated_at',
    ];

     public $translatable = [
		'first_title',
	   	'second_title',
	   	'text',
    ];

}
