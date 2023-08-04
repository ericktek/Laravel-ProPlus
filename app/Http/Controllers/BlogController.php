<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
// Use the Post Model
use App\Models\Post;
use App\Models\Contact;



class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = post::latest()->paginate(3);

        return view('welcome', compact('posts'))->with('i', (request()->input('page', 1) - 1) * 3);

    }

    public function product()
    {

    $posts = post::latest()->get();

         return view('product', ['posts' => $posts]);
     }

    public function contact()
    {
        return view('contactForm');
    }

     public function store(Request $request)
    {

        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10|numeric',
            'message' => 'required'
        ]);

        Contact::create($request->all());


        return redirect()->back()
                         ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
        }

}


