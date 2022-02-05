<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function editorsView(Request $request)
    {
        // $editors = User::where('rol', 'admin')->where('id', '!=', 1)->get();
        $editors = json_decode( file_get_contents('https://jsonplaceholder.typicode.com/users'), true );
        return view('dashboard.editors', ['editors' => $editors]);
    }

    public function readersView(Request $request)
    {
        $readers = json_decode( file_get_contents('https://jsonplaceholder.typicode.com/users'), true );
        return view('dashboard.readers', ['readers' => $readers]);
    }

    public function postsView(Request $request)
    {
        $posts = json_decode( file_get_contents('https://jsonplaceholder.typicode.com/posts'), true );
        $editors = json_decode( file_get_contents('https://jsonplaceholder.typicode.com/users'), true );
        return view('dashboard.posts', ['posts' => $posts, 'editors' => $editors]);
    }

    public function newPostView(Request $request)
    {
        return view('dashboard.newPost');
    }
}
