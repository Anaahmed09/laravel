<?php

namespace App\Http\Controllers;

use App\Models\posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = posts::get();
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "Title" => 'required|string',
            "Posted_By" => 'required',
            "Email" => 'required|email',
            "Description" => 'required|min:5',
        ]);
        posts::insert($request->except('_token'));
        return redirect()->route('Post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = posts::where('Id', $id)->get();
        $creator = DB::table('creators')->where('Name', $post[0]->Posted_By)->get()->all()[0];
        return view('post.show', compact('post', 'creator'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = posts::find($id);
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "Title" => 'required|string',
            "Posted_By" => 'required',
            "Email" => 'required|email',
            "Description" => 'required|min:5',
        ]);
        posts::where('Id', $id)->update($request->except('_token', '_method'));
        return redirect()->route('Post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        posts::where('Id', $id)->delete();
        return redirect()->route('Post.index');
    }
}