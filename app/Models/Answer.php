<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'answer', 'question_id', 'is_corrected',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
