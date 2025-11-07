<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Action;

class User extends Model
{
    protected $table = 'users';

    protected $fillable = ['name', 'email', 'password'];
    protected $hidden = ['password'];
    /**
     * 自動型別轉換
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function templates()
    {
        return $this->hasMany(Template::class);
    }

    public function actions()
    {
        return $this->hasMany(Action::class);
    }

    public function workouts()
    {
        return $this->hasMany(Workout::class);
    }

}
