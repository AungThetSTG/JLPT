<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question', 'moderator_id', 'question_type_id', 'category_id', 'level_id'
    ];

    public function moderator()
    {
        return $this->belongsTo(Moderator::class);
    }

    public function questionType()
    {
        return $this->belongsTo(QuestionType::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }
}
