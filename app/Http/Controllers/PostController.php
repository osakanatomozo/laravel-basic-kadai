<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    Public function index() {
        return view('posts.index');
    }
}
