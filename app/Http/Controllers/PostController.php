<?php

namespace App\Http\Controllers;
use App\Post;
use App\Http\Requests\LinkRequest;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index () 
    {
        $hello = 'Hello,World!';
        $hello_array = ['Hello', 'こんにちは', 'ニーハオ'];

        return view('index', compact('hello', 'hello_array'));
    }

    public function create (Request $request) {
        // $validator = Validator::make($request->all(),[
        //     'name' => 'required|max:255',
        // ]);

        $post = new Post;
        $post->title =  $request->name;
        $post->save();

        return redirect('/');

    }
}
