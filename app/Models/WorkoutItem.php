<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkoutItem extends Model
{
    protected $table = 'workout_items';
    protected $fillable = ['workout_id', 'action_id', 'weight', 'times', 'is_completed'];
    /**
     * 自動型別轉換
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
