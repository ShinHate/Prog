<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Portfolio;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('isadmin')->only([
            'createBlog',
            'myBlogs',
            ]);
    }

    public function home()
    {
        return view('home', [
            "portfolios"=>  Portfolio::all()
        ]);

    }



    public function createBlog()
    {
        return view('create-blog',[
            "categories" => Category::all()
        ]);
    }

    public function myBlogs()
    {
        return view('my-blogs',[
            "blogs"=> Blog::all()
        ]);
    }

    public function blog()
    {
        return view('blog',[
            "blogs"=>  Blog::all()->where('public', 1)
        ]);
    }

    public function sBlog($id)
    {
        $sblog = Blog::find($id);

        if (is_null($sblog)){
            return abort(404);
        }

        return view('sblog',[
            "sblog" => $sblog,
            "categories" => Category::all(),
            "blogs" => Blog::all(),
            "comments" => Comment::all(),

        ]);
    }

    public function portfolio()
    {
        return view('portfolio',[
            "portfolios"=>  Portfolio::all()
        ]);
    }

    public function sPortfolio($id)
    {
        $sportfolio = Portfolio::find($id);

        if (is_null($sportfolio)){
            return abort(404);
        }

        return view('sportfolio',[
            "sportfolio" => $sportfolio,
            "portfolio" => Portfolio::all(),

        ]);
    }



}
