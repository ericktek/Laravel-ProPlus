<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
// Use the Post Model
use App\Models\Post;
// We will use Form Request to validate incoming requests from our store and update method
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = Post::latest()->take(3)->get();
        // return response()->view('welcome', [
        //     'posts' => $posts,
        // ]);

        $posts = post::latest()->paginate(3);

        return view('welcome', compact('posts'))->with('i', (request()->input('page', 1) - 1) * 3);

    }

}


