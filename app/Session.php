<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = [
        'name',
        'start',
        'end',
        'description',
        'course_id',
        'stream_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    /**
     * A session can have many messages
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    /**
     * A session can have many Qnas
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function qnas()
    {
        return $this->hasMany(Qna::class);
    }
}
