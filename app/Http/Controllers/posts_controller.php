<?php

namespace App\Http\Controllers; 

use App\Models\posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class posts_controller extends Controller
{
    function getAllPosts()
    {
        $posts = posts::get();
        return view('all_Posts', ["posts" => $posts]);
    }
    function getPost($id)
    {
        $post = posts::where("Id", $id)->get();
        $posted_by = $post[0]['Posted_By'];
        $creator = DB::table('creators')->where("Name", $posted_by)->get();
        return view('view_one_post', ['post' => $post, 'creator' => $creator]);
    }
}