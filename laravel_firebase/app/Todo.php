<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;

class Todo extends Model
{
    use SyncsWithFirebase;

    protected $fillable = ['task', 'is_done'];

    protected $visible = ['id', 'task', 'is_done'];
}
#\App\Todo::create(['task' => 'Example firease #2','is_done' => false ]);