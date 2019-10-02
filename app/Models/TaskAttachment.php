<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TaskAttachment extends Model
{
    protected $table = 'task_attachments';

    protected $fillable = [
        'task_id',
        's3_key_path',
        'local_path',
    ];

    public function task(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\Task');
    }
}
