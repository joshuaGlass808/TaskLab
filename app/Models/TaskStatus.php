<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TaskStatus extends Model
{
    protected $table = 'task_status';

    protected $fillable = [
        'status',
    ];

    public function task(): HasOne
    {
        return $this->hasOne('App\Models\Task');
    }
}
