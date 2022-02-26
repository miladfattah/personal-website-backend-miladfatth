<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Setting extends Model
{
    use HasFactory;

    protected $guarded = ['id'] ; 

    protected $casts = [
        'data' => 'array'
    ];

    public function title():?string 
    {
        return Arr::get($this->data ,  'title' ) ;
    }

    public function subTitle():?string 
    {
        return Arr::get($this->data ,  'sub_title' ) ;
    }

    public function description():?string 
    {
        return Arr::get($this->data ,  'description' ) ;
    }

    public function instagramId():?string 
    {
        return Arr::get($this->data ,  'instagram_id' ) ;
    }

    public function twitterId():?string 
    {
        return Arr::get($this->data ,  'twitter_id' ) ;
    }

    public function githubId():?string 
    {
        return Arr::get($this->data ,  'github_id' ) ;
    }

    public function email():?string 
    {
        return Arr::get($this->data ,  'email' ) ;
    }

    public function address():?string 
    {
        return Arr::get($this->data ,  'address' ) ;
    }

    public function phone():?string 
    {
        return Arr::get($this->data ,  'phone' ) ;
    }

    public function googleMapUrl():?string 
    {
        return Arr::get($this->data ,  'google_map_url' ) ;
    }
    
}
