<?php

namespace App\Http\Resources;
use Illuminate\Support\Str;

use Illuminate\Http\Resources\Json\JsonResource;

class CvResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id   , 
            'title' => $this->title , 
            'url' => $this->url , 
            'slug' => $this->when($this->slug , $this->slug) , 
            $this->mergeWhen($this->created_at  , function(){
                return [
                    'created_at_for_human' => $this->created_at->diffForHumans(),
                    'created_date' => $this->created_at->format('M d, Y')
                ];
            }),
            'image' => $this->imageUrl() , 
            $this->mergeWhen($this->description , function(){
                return [
                    'description'=> $this->description , 
                    'small_description' => Str::limit(strip_tags($this->description),30)
                ];
            }),
        ];
    }
}
