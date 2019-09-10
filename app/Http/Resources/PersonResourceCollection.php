<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PersonResourceCollection extends ResourceCollection
{
    /**
     
     * @return PersonResourceCollection
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
