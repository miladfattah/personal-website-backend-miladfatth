<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Resources\CvResource; 
use App\Models\Cv ; 
use App\Actions\UploadFile ;

class CvController extends Controller
{
    public function index(){
        $cvs = Cv::latest()->simplePaginate(6);
        return Inertia::render('Cv/Index' , [
            'cvs' => CvResource::collection($cvs)
        ]);
    }

    public function create(){
        return Inertia::render('Cv/Create'  , [
            'edit' => false , 
            'cvs' => new CvResource(new Cv())
        ]);
    }

    public function store(Request $request  , UploadFile $uploadFile ){
        $data  = $request->validate([
            'title' => ['required' , 'string'] , 
            'slug' => ['required' , 'string'] ,
            'url' => ['required' , 'string'] ,
            'description' => ['required' , 'string'] ,
            'image' => ['required' , 'image' , 'max:5000'] ,
        ]);

        $data['image'] = $uploadFile->setFile($request->file('image'))
                                    ->setUploadPath((new Cv)->UploadFolder())
                                    ->execute();


        Cv::create($data);

        return redirect()->route('cvs.index');
    }


    public function edit(Cv $cv)
    {
        return Inertia::render('Cv/Create' , [
            'edit' => true , 
            'cvs' => new CvResource($cv)
        ]);
    }

    public function update(Cv $cv , Request $request ,  UploadFile $uploadFile ){
        $data  = $request->validate([
            'title' => ['required' , 'string'] , 
            'slug' => ['required' , 'string'] ,
            'description' => ['required' , 'string'] ,
        ]);

        if ($request->file('image')) {
            $article->deleteImage();

            $data['image'] = $uploadFile->setFile($request->file('image'))
                ->setUploadPath($cv->uploadFolder())
                ->execute();
        }

        $cv->update($data);
        return redirect()->route('cvs.index');
    }   


    public function destroy(Cv $cv) 
    {
        $cv->delete();
        return redirect()->route('cvs.index');
    }
}
