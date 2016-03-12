<?php
/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 12/03/2016
 * Time: 21:46
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function postCreatePost(Request $request)
    {
        $this->validate($request,[
            'body' => 'required|max:1000',
        ]);
        $post = new Post();
        $post->body = $request['body'];
        $message = 'There was an error';
        if($request->user()->posts()->save($post)){
            $message = 'Post successfully created';
        }
        return redirect()->route('dashboard')->with(['message' => $message]);
    }

}