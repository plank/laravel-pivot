<?php

namespace Plank\Laravel\Pivot\Tests\Models;

use Plank\Laravel\Pivot\Traits\PivotEventTrait;

class Video extends BaseModel
{
    use PivotEventTrait;

    protected $table = 'videos';

    protected $fillable = ['name'];

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
