<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
        $posts = Post::where('section', 'noticias')->get();
        return $posts;
    }

    public function opiniones(Request $request)
    {
        $posts = Post::where('section', 'opiniones')->get();
        return $posts;
    }

    public function componentes(Request $request)
    {
        $posts = Post::where('section', 'componentes')->get();
        return $posts;
    }

    public function getPost(Request $request, $section, $postId)
    {
        $post = Post::where('id', $postId)->first();
        return $post;
    }
}
