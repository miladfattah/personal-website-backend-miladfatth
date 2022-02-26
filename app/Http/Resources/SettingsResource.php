<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SettingsResource extends JsonResource
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
            'title' => $this->title(),
            'sub_title' => $this->subTitle(),
            'description' => $this->description(),
            'instagram_id' => $this->instagramId(),
            'twitter_id' => $this->twitterId(),
            'github_id' => $this->githubId(),
            'address' => $this->address(),
            'email' => $this->email(),
            'phone' => $this->phone(),
            'google_map_url' => $this->googleMapUrl(),

        ];
    }
}
