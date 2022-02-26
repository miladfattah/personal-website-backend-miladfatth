<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia; 
use App\Models\Setting ;
use App\Http\Resources\SettingsResource ;  
class SettingsController extends Controller
{
    private $settings ; 
    public function __construct()
    {
        $this->settings = Setting::find(1) ?? new Setting() ; 
    }

    public function create()
    {
        return Inertia::render('Setting/Create' , [
            'settings' => new SettingsResource($this->settings)
        ]);
    }

    public function saveHome(Request $request) 
    {
        $data = $request->validate([
            'title' => ['required' , 'max:255'],
            'sub_title' => ['required' , 'max:255'],
            'description'=> ['required'] , 
            'instagram_id' => ['required' , 'max:100'],
            'twitter_id' => ['required' , 'max:100'],
            'github_id' => ['required' , 'max:100'],
        ]);

        $this->save($data);

        return redirect()->back();
    }

    public function saveContact(Request $request) 
    {
        $data = $request->validate([

            'address' => ['max:100'],
            'phone' => [ 'max:40'],
            'email' => [ 'max:100'],
            // 'google_map_url' => ['min:3']
        ]);

        $this->save($data);

        return redirect()->back();
    }

    public function save(array $data) : void 
    {
        $this->settings->data == null 
        ?  $this->settings->data = $data 
        :  $this->settings->data = array_merge($this->settings->data , $data ) ;
       
        $this->settings->save();
    }
}
