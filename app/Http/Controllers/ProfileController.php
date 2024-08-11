<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        $email = "OmiSakusa@example.com";
        $name = "Kiyoomi Sakusa";
        return view('/profile')->with("email", $email)->with("name", $name);
    }
}
