<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name', 'assigned_id', 'owner', 'description', 'cost'];
}
