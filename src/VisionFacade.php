<?php

namespace GetThingsDone\Vision;

use Illuminate\Support\Facades\Facade;

/**
 * @see \GetThingsDone\Vision\Vision
 */
class VisionFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'vision';
    }
}
