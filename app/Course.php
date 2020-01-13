<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    /**
     * A Center belong to a user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users()
    {
        return $this->belongsToMany('App\User', 'courses_users');
    }

    public function sessions()
    {
        return $this->hasMany(Session::class);
    }
}
