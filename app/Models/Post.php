<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\Conversions\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


class Post extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = ['title'];

    public function registerMediaConversions(?Media $media = null): void
{
    $this
        ->addMediaConversion('thumbnail')
        //->fit(Fit::Contain, 300, 300)
        ->fit(Manipulations::FIT_FILL, 200, 200)
        ->nonQueued();
}

}
