<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExamRoomMeta extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'exam_room_id', 'key', 'value',
    ];

    public function examRoom()
    {
        return $this->belongsTo(ExamRoom::class);
    }
}
