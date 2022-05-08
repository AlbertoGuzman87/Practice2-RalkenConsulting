<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_list_user()
    {
        try {
            $users = Http::get('https://jsonplaceholder.typicode.com/users')->json();

            $posts = Http::get('https://jsonplaceholder.typicode.com/posts')->json();
            $collectionPost = collect($posts);
            $countPosts = $collectionPost->countBy('userId');

            $albums = Http::get('https://jsonplaceholder.typicode.com/albums')->json();
            $collectionAlbums = collect($albums);
            $countAlbums = $collectionAlbums->countBy('userId');

            $ip = empty($_SERVER["REMOTE_ADDR"]) ? "Desconocida" : $_SERVER["REMOTE_ADDR"];
            \Log::info('User request made ' . $ip);
            \Log::info('Posts request made ' . $ip);
            \Log::info('Albums request made ' . $ip);
            return view('index', [
                'users' => $users,
                'countPosts' => $countPosts,
                'countAlbums' => $countAlbums
            ]);
        } catch (\Exception $e) {
            \Log::debug('Test var fails' . $e->getMessage());
        }
    }

    /**
     * Display the specified resources.
     *
     * @param  int  $userId
     * @return \Illuminate\Http\Response
     */
    public function get_list_posts($userId)
    {
        try {
            $posts = Http::get('https://jsonplaceholder.typicode.com/posts')->json();
            $user = Http::get("https://jsonplaceholder.typicode.com/users/$userId")->json();
            $collectionPosts = collect($posts)->where('userId', $userId);

            $ip = empty($_SERVER["REMOTE_ADDR"]) ? "Desconocida" : $_SERVER["REMOTE_ADDR"];
            \Log::info('User request made ' . $ip);
            \Log::info('Posts request made ' . $ip);
            return view('posts.index', [
                'collectionPosts' => $collectionPosts,
                'user' => $user
            ]);
        } catch (\Exception $e) {
            \Log::debug('Test var fails' . $e->getMessage());
        }
    }

    /**
     * Display the specified resources.
     *
     * @param  int  $userId
     * @return \Illuminate\Http\Response
     */
    public function get_list_albums($userId)
    {
        try {
            $albums = Http::get('https://jsonplaceholder.typicode.com/albums')->json();
            $user = Http::get("https://jsonplaceholder.typicode.com/users/$userId")->json();
            $collectionAlbums = collect($albums)->where('userId', $userId);

            $photos = Http::get('https://jsonplaceholder.typicode.com/photos')->json();
            $collectionPhotos = collect($photos);
            $countPhotos = $collectionPhotos->countBy('albumId');

            $ip = empty($_SERVER["REMOTE_ADDR"]) ? "Desconocida" : $_SERVER["REMOTE_ADDR"];
            \Log::info('User request made ' . $ip);
            \Log::info('Albums request made ' . $ip);
            return view('albums.index', [
                'collectionAlbums' => $collectionAlbums,
                'countPhotos' => $countPhotos,
                'user' => $user
            ]);
        } catch (\Exception $e) {
            \Log::debug('Test var fails' . $e->getMessage());
        }
    }

    /**
     * Display the specified resources.
     *
     * @param  int  $albumId
     * @return \Illuminate\Http\Response
     */
    public function get_list_photos($albumId)
    {
        try {
            $photos = Http::get('https://jsonplaceholder.typicode.com/photos')->json();
            $album = Http::get("https://jsonplaceholder.typicode.com/albums/$albumId")->json();
            $collectionPhotos = collect($photos)->where('albumId', $albumId);

            $ip = empty($_SERVER["REMOTE_ADDR"]) ? "Desconocida" : $_SERVER["REMOTE_ADDR"];
            \Log::info('Photos request made ' . $ip);
            \Log::info('Albums request made ' . $ip);
            return view('albums.show', [
                'collectionPhotos' => $collectionPhotos,
                'album' => $album
            ]);
        } catch (\Exception $e) {
            \Log::debug('Test var fails' . $e->getMessage());
        }
    }
}
