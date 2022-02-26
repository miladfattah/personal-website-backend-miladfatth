<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Imageable; 

class Article extends Model
{
    use HasFactory;
    use Imageable ; 
    protected $gurded = ['id'] ; 
    protected $fillable = [
        'image' , 
        'title' , 
        'slug' , 
        'description' , 
        'user_name' , 
        'user_avatar' , 
        'rank' ,
        'like' , 
        'read_time'
    ];


    public function UploadFolder():string 
    {
        return "articles" ;
        // return "articles/" . "{$this->slug}";
    }
}
