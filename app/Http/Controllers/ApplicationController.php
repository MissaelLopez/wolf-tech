<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function newsView(Request $request)
    {
        $session = $request->session()->get('authenticated');
        $logged = User::where('email', $session)->first();
        $posts = json_decode( file_get_contents('https://jsonplaceholder.typicode.com/posts'), true );

        return view('public.news', ['title' => 'Noticias', 'logged' => $logged, 'posts' => $posts]);
    }

    public function opinionsView(Request $request)
    {
        $session = $request->session()->get('authenticated');
        $logged = User::where('email', $session)->first();
        $posts = json_decode( file_get_contents('https://jsonplaceholder.typicode.com/posts'), true );

        return view('public.opinions', ['title' => 'Opiniones', 'logged' => $logged, 'posts' => $posts]);
    }

    public function componentsView(Request $request)
    {
        $session = $request->session()->get('authenticated');
        $logged = User::where('email', $session)->first();
        $posts = json_decode( file_get_contents('https://jsonplaceholder.typicode.com/posts'), true );

        return view('public.components', ['title' => 'Componentes', 'logged' => $logged, 'posts' => $posts]);
    }

    public function readPost(Request $request, $section, $postId)
    {
        $session = $request->session()->get('authenticated');
        $logged = User::where('email', $session)->first();
        $posts = json_decode( file_get_contents('https://jsonplaceholder.typicode.com/posts'), true );
        $post = json_decode( file_get_contents('https://jsonplaceholder.typicode.com/posts/' . $postId ), true );        

        return view('public.readPost', ['title' => 'Popular', 'logged' => $logged, 'posts' => $posts, 'post' => $post, 'section' => $section]);
    }
}
