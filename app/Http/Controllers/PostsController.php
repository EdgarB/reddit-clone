<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    function index()
    {
    	return view('posts.index');
    }
    function show($id)
    {
    	return view('posts.show');
    }
}
