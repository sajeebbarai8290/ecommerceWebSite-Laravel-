<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class manufacturer extends Model
{
    protected $fillable = ['manufacturerName','manufacturerDescription','manufacturerStatus'];
}
