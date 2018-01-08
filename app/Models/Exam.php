<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'level_id', 'exam_room_id', 'student_id', 'category_id', 'date'
    ];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function examRoom()
    {
        return $this->belongsTo(ExamRoom::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
