<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\Conversions\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Cviebrock\EloquentSluggable\Sluggable;


class Post extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use Sluggable;

    protected $fillable = [
        'title',

    ];

    //converts media to 300x300 for thumbnail version

    public function registerMediaConversions(?Media $media = null): void
{
    $this
        ->addMediaConversion('thumbnail')
       ->fit(Fit::Contain, 300, 300)
        ->nonQueued();
}
    // assures model binding will use a database column ('slug') rather than id to retrieve
    public function getRouteKeyName()
        {
            return 'slug';
        }

        //Cviebrock\EloquentSluggable\Sluggable method
/**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}
