<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Message ; 

class MessageController extends Controller
{
 

    public function index()
    {
        return Inertia::render('Message/Index' , [
             'messages' => Message::all()
        ]);
    }

    public function show(Message $message)
    {
        return Inertia::render('Message/Show' , [
            'message' => $message
        ]);
    }

}
