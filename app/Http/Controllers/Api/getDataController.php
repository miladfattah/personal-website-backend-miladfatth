<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ArticleResource;
use App\Http\Resources\CvResource;
use App\Http\Resources\SettingsResource;
use App\Models\Article; 
use App\Models\Cv; 
use App\Models\Setting; 
use App\Models\Message; 
class getDataController extends Controller
{
    public function articles(){
        return ArticleResource::collection(Article::paginate(4));
    }

    public function showArticle(Request $request){
        return new ArticleResource(Article::where('slug' , $request->slug)->first());
    }

    public function cvs(){
        return CvResource::collection(Cv::paginate(4));
    }

    public function settings(){
        return SettingsResource::collection(Setting::all());
    }

    public function messages(Request $request){
        $request->validate([
            'username' => 'required|string|max:255' , 
            'email' => 'required|max:255' , 
            'phone' => 'required|max:255' , 
            'message' => 'required'
        ]);


        Message::create([
            'username' => $request->username , 
            'email' => $request->email ,  
            'phone' => $request->phone , 
            'message' => $request->message
        ]);

        return response()->json('success', 200);
    }
}
