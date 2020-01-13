<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qna extends Model
{
    protected $fillable = [
        'question',
        'answer',
        'slug'
    ];

    /**
     * A Qna belong to a session
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function session()
    {
        return $this->belongsTo(Session::class);
    }
}
