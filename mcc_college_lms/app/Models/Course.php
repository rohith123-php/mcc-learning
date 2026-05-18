<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['title', 'category', 'level', 'duration', 'image', 'instructor', 'description', 'learning_outcomes', 'rating', 'price'];
    protected $casts = [
        'learning_outcomes' => 'array',
    ];

    public function modules()
    {
        return $this->hasMany(Module::class)->orderBy('order');
    }

    public function schedules()
    {
        return $this->hasMany(CourseSchedule::class)->orderBy('date');
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class)->orderBy('due_date');
    }
}
