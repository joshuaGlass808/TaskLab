<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;  
use Illuminate\Database\Eloquent\Relations\HasOne;

class Tag extends Model
{
    protected $table = 'tags';

    protected $fillable = [
        'creator_id',
        'enabled',
        'tag',
    ];

    public function creator(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }

    public function taskTag(): HasOne
    {
        return $this->hasOne('App\Models\TaskTag');
    }
}
