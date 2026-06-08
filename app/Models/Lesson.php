<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = ['module_id', 'title', 'video_link', 'file_path', 'order'];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
