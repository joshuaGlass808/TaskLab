<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;  

class TaskComment extends Model
{
    protected $table = 'task_comments';

    protected $fillable = [
        'task_id',
        'author_id',
        'comment',
    ];

    public function task(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\Task');
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }

}
