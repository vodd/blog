<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Page;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = Category::orderByRaw('RAND()')->first();
        return view('posts.index',compact('cat'));

    }

    public function getCategory($id){
        $article = Article::where('category_id','=',$id)->get();
        return view('posts.category',compact('article'));
    }

    public function getContact(){
        return view('posts.contact');
    }

    public function getPage($id){
        $page = Page::findOrFail($id);
        return view('posts.page',compact('page'));
    }
}
