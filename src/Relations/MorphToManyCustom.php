<?php

namespace Plank\Laravel\Pivot\Relations;

use Plank\Laravel\Pivot\Traits\FiresPivotEventsTrait;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class MorphToManyCustom extends MorphToMany
{
    use FiresPivotEventsTrait;
}
