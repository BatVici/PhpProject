<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cabinet extends Model
{
    protected $fillable = ['Number','Capacity','Type','Available'];
}
