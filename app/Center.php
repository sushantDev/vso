<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    protected $fillable = [
        'name',
        'address',
        'phone',
        'user_id'
    ];

    /**
     * A Center belong to a user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function student()
    {
        return $this->hasMany(Student::class);
    }
}
