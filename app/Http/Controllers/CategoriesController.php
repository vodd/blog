<?php

namespace App\Http\Controllers;

use App\Article;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use Intervention\Image\ImageManagerStatic as Image;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = Category::get();
        return $cat;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\EditArticleRequest $request)
    {

        $img = Image::make($request->images);
        $mime = $img->mime();  //edited due to updated to 2.x
        if ($mime == 'image/jpeg')
            $extension = '.jpg';
        elseif ($mime == 'image/png')
            $extension = '.png';
        elseif ($mime == 'image/gif')
            $extension = '.gif';
        else
            $extension = '';
        $file =  str_replace(' ','-',$request->title.$extension) ;
        $img->save(public_path('images/categories/'.$file));
        $category = new Category();
        $category = Category::create($request->except('images'));
        $category->images = $file;
        $category->save();
        return redirect('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cat = Category::findOrfail($id);
        return $cat;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat = Category::findOrFail($id);
        return view('categories.edit',compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\EditArticleRequest $request, $id)
    {
        $cat = Category::findOrfail($id);
        $cat->update($request->except('images'));
        if($request->images){
            $img = Image::make($request->images);
            $mime = $img->mime();  //edited due to updated to 2.x
            if ($mime == 'image/jpeg')
                $extension = '.jpg';
            elseif ($mime == 'image/png')
                $extension = '.png';
            elseif ($mime == 'image/gif')
                $extension = '.gif';
            else
                $extension = '';
          $file =  str_replace(' ','-',$request->title.$extension) ;
          $img->save(public_path('images/categories/'.$file));
          $cat->images = $file;
          $cat->save();
          return redirect('admin');
        }
        return redirect('admin');
    }

    public function getArticle($id){
        $article = Article::where('category_id','=',$id)->get();
        $cat = Category::findOrFail($id);
        return view('categories.article',compact('article','cat'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
