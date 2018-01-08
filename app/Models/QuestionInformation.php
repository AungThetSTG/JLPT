<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionInformation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question_id', 'information',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
