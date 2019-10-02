<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TaskTag extends Model
{
    protected $table = 'task_tags';

    protected $fillable = [
        'task_id',
        'tag_id',
    ];

    public function tag(): BelongsTo
    {
        return $this->belongsTo('App\Models\Tag');
    }

    public function task(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\Task');
    }
}
