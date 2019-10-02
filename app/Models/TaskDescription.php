<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TaskDescription extends Model
{
    protected $table = 'task_descriptions';

    protected $fillable = [
        'task_id',
        'description',
    ];

    public function task(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\Task');
    }
}
