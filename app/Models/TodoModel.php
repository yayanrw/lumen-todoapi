<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TodoModel extends Model
{
    protected $fillable = ['title', 'description', 'date', 'created_at', 'created_by', 'updated_at', 'updated_by'];
}
