<?php

namespace App\Models\Subscriptions;

use Illuminate\Database\Eloquent\Model;


class Subscriptions extends Model
{

    public $table = 'subscriptions';
    public $timestamps = true;
    protected $fillable = [
        'id',
        'email',
        'unsubscribed',
        'created_at',
        'updated_at',
    ];


}
