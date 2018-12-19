<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title', 'resource_id', 'user_id', 'start_date','end_date'];
}
