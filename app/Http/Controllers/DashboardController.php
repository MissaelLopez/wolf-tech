<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function editorsView(Request $request)
    {
        $session = $request->session()->get('authenticated');
        $logged = User::where('email', $session)->first();

        $editors = User::where('rol', 'editor')->get();
        
        return view('dashboard.editors', ['editors' => $editors, 'user' => $logged]);
    }

    public function saveEditor(Request $request)
    {
        $editor = new User();
        $data = $request->only('name', 'email');
        $editor->name = $data['name'];
        $editor->email = $data['email'];
        $editor->rol = 'editor';
        $editor->password = Hash::make('12345678');
        $editor->save();
        return redirect()->intended('/dashboard/editors');
    }

    public function deleteEditor(Request $request, $id)
    {
        User::where('id', $id)->delete();
        return redirect()->intended('/dashboard/editors');
    }

    public function readersView(Request $request)
    {
        $session = $request->session()->get('authenticated');
        $logged = User::where('email', $session)->first();

        $readers = User::where('rol', 'user')->get();
        return view('dashboard.readers', ['readers' => $readers, 'user' => $logged]);
    }

    public function deleteReader(Request $request, $id)
    {
        User::where('id', $id)->delete();
        return redirect()->intended('/dashboard/readers');
    }

    public function postsView(Request $request)
    {
        $session = $request->session()->get('authenticated');
        $logged = User::where('email', $session)->first();

        if ( $logged->rol == 'admin' )
        {
            $posts = Post::all();
        } else {
            $posts = Post::where('user_id', $logged->id)->get();
        }

        return view('dashboard.posts', ['posts' => $posts, 'user' => $logged]);
    }

    public function savePost(Request $request)
    {
        $data = $request->only('title', 'content', 'editor', 'section');

        $image = $request->file('filepond');
        $name = $image->getClientOriginalName();
        Storage::disk('public')->put($name, file_get_contents($image->getPathname()));
        $path = Storage::path('public/' . $name);
        $url = 'storage/' . $name;

        $post = new Post();
        $post->title = $data['title'];
        $post->content = $data['content'];
        $post->image_url = $url;
        $post->user_id = $data['editor'];
        $post->section = $data['section'];        
        $post->save();
        return redirect()->intended('/dashboard/posts');
    }

    public function newPostView(Request $request)
    {
        $session = $request->session()->get('authenticated');
        $logged = User::where('email', $session)->first();

        return view('dashboard.newPost', ['user' => $logged]);
    }

    public function editPostView(Request $request, $id)
    {
        $session = $request->session()->get('authenticated');
        $logged = User::where('email', $session)->first();

        $post = Post::where('id', $id)->first();
        return view('dashboard.editPost', ['user' => $logged, 'post' => $post]);
    }

    public function editPost(Request $request, $id)
    {
        $post = Post::where('id', $id)->first();
        $data = $request->only('title', 'content', 'editor', 'section');
        $post->title = $data['title'];
        $post->content = $data['content'];
        $post->user_id = $data['editor'];
        $post->section = $data['section'];
        $post->save();
        return redirect()->intended('/dashboard/posts');
    }

    public function deletePost(Request $request, $id)
    {
        Post::where('id', $id)->delete();
        return redirect()->intended('/dashboard/posts');
    }
}
