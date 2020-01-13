<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as InterventionImage;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    const THUMB_PATH = 'thumbnails/';
    const DEFAULT    = 'https://placeimg.com/256/256/any';

    protected $fillable = [ 'path', 'name' ];

    protected $appends = [ 'thumbnail', 'url' ];

    public function imageable()
    {
        return $this->morphTo();
    }

    public function getFullPath()
    {
        return storage_path('app/public/' . $this->path);
    }

    public function file()
    {
        ini_set('memory_limit', '512M');

        if (file_exists($this->getFullPath())) {
            return InterventionImage::make(storage_path('app/public/' . $this->path));
        }
    }

    public function getThumbnail($width = null, $height = null)
    {
        if (($width == null && $height == null) || ! $this->file()) {
            return null;
        }
        $prefix           = 'TH_';
        $originalFilename = $filename = basename($this->path);
        $name             = $prefix . $width . '_' . $height . '_' . $originalFilename;
        $fileLocation     = public_path(self::THUMB_PATH) . $name;
        if ( ! file_exists($fileLocation)) {
            if ($width == null || $height == null) {
                $this->file()->resize($width, $height, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($fileLocation);
            } else {
                $this->file()->fit($width, $height)->save($fileLocation);
            }
        }

        return url('/thumbnails/' . $name);
    }

    public function getThumbnailAttribute()
    {
        return $this->getThumbnail(150);
    }

    public function delete()
    {
        try {
            Storage::delete($this->getFullPath());
        } catch (\Exception $e) {

        }

        parent::delete();
    }

    public function getUrlAttribute()
    {
        return asset('storage/' . $this->path);
    }

}