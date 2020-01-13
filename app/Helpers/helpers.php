<?php

use App\Image;
use App\User;
use Silber\Bouncer\BouncerFacade as Bouncer;
use Silber\Bouncer\Database\Role;


function tt_thumbnail($entity = null, $width = null, $height = null, $slug = "", $useDefault = true)
{
    $text = empty($slug) ? env('APP_NAME') : $slug;
    if ($entity && $entity instanceof Image) {
        if ( ! $width && ! $height) {
            return $entity->url;
        }

        return $entity->getThumbnail($width, $height);
    } elseif ($entity && $entity->images && $entity->images->count()) {
        if (empty($slug)) {
            $image = $entity->images->first();
            if ( ! $width && ! $height) {
                return $image->url;
            }

            return $image->getThumbnail($width, $height);
        } else {
            $image = $entity->images()->wherePivot('slug', $slug)->first();

            if ($image) {
                if ( ! $width && ! $height) {
                    return $image->url;
                }

                return $image->getThumbnail($width, $height);
            }
        }
    } elseif ($entity && $entity->image && $entity instanceof Image) {
        $image = $entity->image;
        if ( ! $width && ! $height) {
            return $image->url;
        }

        return $image->getThumbnail($width, $height);
    }

    if ( ! $useDefault) {
        return false;
    }

    return Image::DEFAULT;
}
