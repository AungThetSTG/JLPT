<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'exam_id', 'exam_room_id', 'question_id', 'answer_id', 'category_id'
    ];

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }

    public function examRoom()
    {
        return $this->belongsTo(ExamRoom::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
