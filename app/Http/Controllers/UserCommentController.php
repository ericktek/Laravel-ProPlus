<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
// Use the Post Model
use App\Models\Contact;
// We will use Form Request to validate incoming requests from our store and update method
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;

class UserCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return response()->view('comment.index', [
            'contacts' => Contact::orderBy('updated_at', 'desc')->get(),
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $contact = Contact::findOrFail($id);

        $delete = $contact->delete($id);

        if($delete) {
            session()->flash('notif.success', 'Comment deleted successfully!');
            return redirect()->route('comment.index');
        }

        return abort(500);
    }
}
