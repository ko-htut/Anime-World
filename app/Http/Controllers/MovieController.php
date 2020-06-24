<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Subtitle;
use App\Dataplan;
use App\Credit;
use App\Category;

class MovieController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    public function index()
    {
      $movie = Movie::orderBy('id','desc')->paginate(10);
      $subtitle = Subtitle::get();
      $dataplan = Dataplan::get();
      return view('admin.movie.index',compact('movie','subtitle','dataplan'));
    }

    public function create()
    {
        $subtitle = Subtitle::orderBy('title','asc')->get();
        $dataplan = Dataplan::orderBy('title','asc')->get();
        $credit = Credit::orderBy('title','asc')->get();
        $category = Category::orderBy('title','asc')->get();
        return view('admin.movie.add',compact('subtitle','dataplan','credit','category'));
    }

    public function store(Request $request)
    {
        $movie = new Movie;
        $movie->title = $request->title;
        $movie->slug = $request->slug;
        $movie->subtitle_id = $request->subtitle;
        $movie->dataplan_id = $request->dataplan;
        $movie->link = $request->link;
        $movie->credit_id = $request->credit_id;
        $movie->category_id = $request->category_id;
        $movie->review = $request->review;
        if($request->image){
          $image = $request->file('image');
          $imgName = time().'.'.$image->getClientOriginalExtension();
    			$request->image->move('images/movie', $imgName);
    			$movie->image = $imgName;
    		}
        $movie->save();
        return redirect('/backend/movies')->with('msg','Successfully inserted data');
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        $subtitle = Subtitle::orderBy('title','asc')->get();
        $dataplan = Dataplan::orderBy('title','asc')->get();
        $credit = Credit::orderBy('title','asc')->get();
        $category = Category::orderBy('title','asc')->get();
        return view('admin.movie.edit',compact('movie','subtitle','dataplan','credit','category'));
    }

    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->title = $request->title;
        $movie->slug = $request->slug;
        $movie->subtitle_id = $request->subtitle;
        $movie->dataplan_id = $request->dataplan;
        $movie->link = $request->link;
        $movie->credit_id = $request->credit_id;
        $movie->category_id = $request->category_id;
        $movie->review = $request->review;
        if($request->image){
          $image = $request->file('image');
          $imgName = time().'.'.$image->getClientOriginalExtension();
    			$request->image->move('images/movie', $imgName);
    			$movie->image = $imgName;
    		}
        $movie->update();
        return redirect('/backend/movies')->with('msg','Successfully updated data');
    }

    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return redirect('/backend/movies')->with('msg','Successfully deleted data');
    }
}
