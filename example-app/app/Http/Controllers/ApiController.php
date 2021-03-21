<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class ApiController extends Controller
{
    //
    public function index(Request $request)
    {
        $posts = Post::all();
        return response($posts, 200);
    }
    public function get_id(Request $request){
        $posts = Post::find($request->post_id);
        if ($posts == null) {
            return response(['message' => 'There is no client'], 404);
        }
        return response($posts, 200);
    }
}
