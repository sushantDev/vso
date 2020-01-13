<?php

namespace App\Traits;

use App\Image;

trait Imageable
{
    public function getImageAttribute()
    {
        if ($image = $this->images()->first()) {
            return $image->thumbnail;
        }

        return Image::DEFAULT;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function images()
    {
        return $this->morphToMany(Image::class, 'imageable')->withPivot('slug');
    }

    /**
     * @param array $options
     * @return bool|null|void
     * @throws \Exception
     */
    public function delete(array $options = [])
    {
        if ($this->images()) {
            $this->images()->delete();
        }

        return parent::delete($options);
    }
}
