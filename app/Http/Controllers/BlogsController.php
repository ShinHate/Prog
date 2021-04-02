<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            "title" => ["required", "string"],
            "description" => ["required", "string"],
            "RL" => ["required", "string"],
            "email" => ["required", "string"],
            "category" => ["required", "integer"],
            "image" => ["required", "mimes:png,jpg,jpeg", "max:10000"],
        ]);

        $image_path = "/storage/". $request->image->store("images", "public");

        Blog::create([
            "title" => $request->title,
            "description" => $request->description,
            "category_id" => $request->category,
            "email" => $request->email,
            "image" => $image_path,
            "tags" => $request->tags,
            "RL" => $request->RL,

        ]);

        return redirect()->route('my-blogs');
    }

    public function publicBlog($id)
    {
        {
            $blog = Blog::find($id);

            if(is_null($blog)){
                return abort (404);
            }

            $blog->public = (int)$blog->public === 1 ? 0 : 1;

            $blog->save();

            return redirect() -> back();

        }
    }


    public function storeComment(Request $request)
    {
        $comment = new Comment;

        $comment->comment = $request->comment;

        $comment->user()->associate($request->user());

        $blog = Blog::find($request->blog_id);

        $blog->comments()->save($comment);

        return back();
    }





}
