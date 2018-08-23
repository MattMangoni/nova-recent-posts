<?php

namespace Mattmangoni\RecentPosts\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RecentPostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'created_at' => $this->created_at->format('m-d-Y'),
            'author' => $this->author->name
        ];
    }
}