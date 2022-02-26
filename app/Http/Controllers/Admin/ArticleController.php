<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Resources\ArticleResource; 
use App\Models\Article ; 
use App\Actions\UploadFile ;
class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->simplePaginate(6);
        return Inertia::render('Article/Index' , [
            'articles' => ArticleResource::collection($articles)
        ]);
    }

    public function create()
    {
        return Inertia::render('Article/Create' , [
            'edit' => false , 
            'articles' => new ArticleResource(new Article())
        ]);
    }

    public function store( Request $request  , UploadFile $uploadFile )
    {
        $data  = $request->validate([
            'title' => ['required' , 'string'] , 
            'slug' => ['required' , 'string'] ,
            'user_name' => ['required' , 'string' , 'max:50'] , 
            'rank' => ['required' , 'max:50'] , 
            'read_time' => ['required' , 'max:50'] , 
            'description' => ['required' , 'string'] ,
            'image' => ['required' , 'image' , 'max:5000'] ,
            'user_avatar' => ['required' , 'image' , 'max:5000'] 
        ]);

        $data['image'] = $uploadFile->setFile($request->file('image'))
                                    ->setUploadPath((new Article)->UploadFolder())
                                    ->execute();
        $data['user_avatar'] = $uploadFile->setFile($request->file('user_avatar'))
                                    ->setUploadPath((new Article)->UploadFolder())
                                    ->execute();

        Article::create($data);

        return redirect()->route('articles.index');
    }


    public function edit(Article $article)
    {
        return Inertia::render('Article/Create' , [
            'edit' => true , 
            'articles' => new ArticleResource($article)
        ]);
    }

    public function update(Article $article , Request $request )
    {

        $data  = $request->validate([
            'title' => ['required' , 'string'] , 
            'slug' => ['required' , 'string'] ,
            'user_name' => ['required' , 'string' , 'max:50'] , 
            'rank' => ['required' , 'max:50'] , 
            'read_time' => ['required' , 'max:50'] , 
            'description' => ['required' , 'string'] ,
    
        ]);

        $data['image'] = $article->image  ; 
        $data['image'] = $article->user_avatar  ; 

        if($article->file('image')){
            $article->deleteImage();
            $data['image'] = $uploadFile->setFile($request->file('image'))
            ->setUploadPath($article->UploadFolder())
            ->execute();
        }

        if($article->file('user_avatar')){
            $article->deleteImage('user_avatar');
            $data['image'] = $uploadFile->setFile($request->file('user_avatar'))
            ->setUploadPath($article->UploadFolder())
            ->execute();
        }

        $article->update($data);

        return redirect()->route('articles.index');
    }

    public function destroy(Article $article) 
    {
        $article->delete();
        return redirect()->route('articles.index');
    }
}
