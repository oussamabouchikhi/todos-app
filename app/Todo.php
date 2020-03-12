<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    // The field completed will be false by default 
    protected $attributes = [

        'completed' => false,

    ];
}
