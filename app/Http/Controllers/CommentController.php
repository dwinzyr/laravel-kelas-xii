<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Comment; 
use App\Http\Requests\StoreCommentRequest;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $comments = Comment::select('name','emai', 'phone', 'message')->get();
        return view('components.movie', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comment.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommentRequest $request, Comment $comment)
    {
        $comment->create($request->all());
        return redirect()->route('comment.index')
        ->with(['success' => 'Data telah di simpan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(comments $comment)
    {
        return view('comment.show', compact('comment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}