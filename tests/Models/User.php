<?php

namespace Plank\Laravel\Pivot\Tests\Models;

use Plank\Laravel\Pivot\Traits\PivotEventTrait;

class User extends BaseModel
{
    use PivotEventTrait;

    protected $table = 'users';

    protected $fillable = ['name'];

    protected $observables = ['my-custom-observable'];

    public function roles()
    {
        return $this->belongsToMany(Role::class)
            ->withPivot(['value']);
    }

    public function sellers()
    {
        return $this->belongsToMany(Seller::class)
            ->withPivot(['value']);
    }
}
