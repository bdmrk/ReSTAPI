<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //to get all data
        return parent::toArray($request);

        //to get specific data

        // return [
        //     'firstName' => $this->firstName,
        //     'lastName' => $this->lastName
        // ];
    }
}
