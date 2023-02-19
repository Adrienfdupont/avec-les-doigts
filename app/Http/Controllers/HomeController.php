<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function show_index()
    {
        if (auth()->check()) {
            $user_picture_path = auth()->user()->image_path;
        } else {
            $user_picture_path = 'user.png';
        }

        return view('welcome', [
            "user_image_path" => $user_picture_path
        ]);
    }
}
