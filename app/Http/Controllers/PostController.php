<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\Ethnic;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(5);
        $randpics = Ethnic::inRandomOrder()
        ->limit(6)
        ->get();

        $classes = ["box-a", "box-b", "box-c", "box-d"];

        return view('home', compact('posts','randpics', 'classes'));

       
    }
    public function indexAmh()
    {
        $posts = Post::latest()->paginate(5);
        $randpics = Ethnic::inRandomOrder()
        ->limit(6)
        ->get();

        $classes = ["box-a", "box-b", "box-c", "box-d"];

        return view('amh/home', compact('posts','randpics', 'classes'));

       
    }
}
?>