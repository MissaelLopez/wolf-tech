<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function allPosts(Request $request)
    {
        $session = $request->session()->get('authenticated');
        $logged = User::where('email', $session)->first();

        return view('public.allPosts', ['logged' => $logged]);
    }

    public function noticias(Request $request)
    {
        $posts = json_decode( file_get_contents('https://jsonplaceholder.typicode.com/posts'), true );
        return $posts;
    }

    public function opiniones(Request $request)
    {
        $posts = json_decode( file_get_contents('https://jsonplaceholder.typicode.com/posts'), true );
        return $posts;
    }

    public function componentes(Request $request)
    {
        $posts = json_decode( file_get_contents('https://jsonplaceholder.typicode.com/posts'), true );
        return $posts;
    }

    public function getPost(Request $request, $section, $postId)
    {
        $post = json_decode( file_get_contents('https://jsonplaceholder.typicode.com/posts/' . $postId ), true );
        return $post;
    }
}
