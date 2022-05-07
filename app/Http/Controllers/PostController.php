<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function get_list_user()
    {
        $users = Http::get('https://jsonplaceholder.typicode.com/users')->json();

        $posts = Http::get('https://jsonplaceholder.typicode.com/posts')->json();
        $collectionPost = collect($posts);
        $countPosts = $collectionPost->countBy('userId');

        $albums = Http::get('https://jsonplaceholder.typicode.com/albums')->json();
        $collectionAlbums = collect($albums);
        $countAlbums = $collectionAlbums->countBy('userId');

        return view('index', [
            'users' => $users,
            'countPosts' => $countPosts,
            'countAlbums' => $countAlbums
        ]);
    }

    public function get_list_posts($userId)
    {
        $posts = Http::get('https://jsonplaceholder.typicode.com/posts')->json();
        $user = Http::get("https://jsonplaceholder.typicode.com/users/$userId")->json();
        $collectionPosts = collect($posts)->where('userId', $userId);
        return view('posts.index', [
            'collectionPosts' => $collectionPosts,
            'user' => $user
        ]);
    }
}
