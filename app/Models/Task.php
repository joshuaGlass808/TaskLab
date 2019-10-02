<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;  
use Illuminate\Database\Eloquent\Relations\HasOne;

class Task extends Model
{
    protected $table = 'tasks';
    protected $fillable = [
        'owner_id',
        'status_id'
    ];

    //Below code is not ready to be uncommented yet.
    // A new task should generate an event to make sure we update
    // any clients that are connected to our future socket connection.
    /*
    protected $dispatchesEvents = [
        'saved' => TaskSaved::class,
    ];
    */

    /**
     * Undocumented function
     *
     * @return BelongsTo
     */
    public function owner(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }

    public function taskAttachment(): HasMany
    {
        return $this->hasMany('App\Models\TaskAttachment');
    }

    public function taskComment(): HasMany
    {
        return $this->hasMany('App\Models\TaskComment');
    }

    public function taskDescription(): HasMany
    {
        return $this->hasMany('App\Models\TaskDescription');
    }

    public function taskTag(): HasMany
    {
        return $this->hasMany('App\Models\TaskTag');
    }

    public function taskStatus(): HasOne
    {
        return $this->hasOne('App\Models\TaskStatus');
    }

    public function status(): HasOne
    {
        return $this->taskStatus();
    }
}
