<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionMeta extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question_id', 'key', 'value',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
