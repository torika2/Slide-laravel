<?php

namespace App\Models\Contact;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Activitylog\Traits\LogsActivity;

class Contact extends Model
{
    use HasTranslations, LogsActivity;

    public $table = 'contact';
    public $timestamps = true;
    protected $fillable = [
        'id',
        'department',
        'name',
        'email',
        'phone',
        'ord',
        'header',
        'faq',
        'created_at',
        'updated_at',
    ];
    public $translatable = [
        'department',
        'name',
    ];

    protected static $logFillable = true;


}
