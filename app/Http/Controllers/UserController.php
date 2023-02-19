<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function show_dashboard()
    {
        $user = auth()->user();

        $name = $user->name;
        $email = $user->email;
        $user_picture_path = $user->image_path ? $user->image_path : "user.png";
        $average_note = $user->average_note;

        return view('dashboard', [
            "name" => $name,
            "email" => $email,
            "user_picture_path" => $user_picture_path,
            "average_note" => $average_note
        ]);
    }
}
