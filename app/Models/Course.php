<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    protected $appends = ['close'];

    public function getCloseAttribute()
    {
        $now = date('Y m d');
        if(date('Y m d', strtotime($this->end_date)) < $now)
            return true;
        else
            return false;
    }

    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }

    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }
    
    public function lessons()
    {
        return $this->hasMany('App\Models\Lesson', 'course_id', 'id');
    }
}
