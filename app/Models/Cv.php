<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Imageable; 

class Cv extends Model
{
    use HasFactory;
    use Imageable ; 
    protected $gurded = ['id'] ; 
    protected $fillable = [
        'image' , 
        'title' , 
        'slug' , 
        'description' , 
        'url' , 
       
    ];


    public function UploadFolder():string 
    {
        return "cvs" ;
        // return "cvs/" . "{$this->slug}";
    }
}
