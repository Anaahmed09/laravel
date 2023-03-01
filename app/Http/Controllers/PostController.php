<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  function index()
  {
    $posts = post::paginate();
    return view('post.index', compact('posts'));
  }
}
