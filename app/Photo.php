<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Photo
 *
 * @property-read mixed $file
 * @mixin \Eloquent
 */
class Photo extends Model
{
    //
    protected $uploads = '/images/';
    protected $fillable = ['file'];

    public function getFileAttribute($photo){
        return $this->uploads . $photo;
    }
}
