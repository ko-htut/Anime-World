<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ComicSeries;
use App\ComicSeason;
use App\Credit;
use App\Category;

class ComicSeriesController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    public function index()
    {
        $series = ComicSeries::orderBy('id','desc')->paginate(10);
        return view('admin.comic.series.index',compact('series'));
    }

    public function create()
    {
        $credit = Credit::orderBy('title','asc')->get();
        $category = Category::orderBy('title','asc')->get();
        return view('admin.comic.series.add',compact('subtitle','category','credit'));
    }

    public function store(Request $request)
    {
        $series = new ComicSeries;
        $series->title = $request->title;
        $series->slug = $request->slug;
        $series->review = $request->review;
        $series->credit_id = $request->credit_id;
        $series->category_id = $request->category_id;
        if($request->image){
          $image = $request->file('image');
          $imgName = time().'.'.$image->getClientOriginalExtension();
    			$request->image->move('images/comic', $imgName);
    			$series->images = $imgName;
    		}
        $series->save();
        return redirect('/backend/comic/series')->with('msg','Successfully inserted data');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $series = ComicSeries::findOrFail($id);
        $credit = Credit::orderBy('title','asc')->get();
        $category = Category::orderBy('title','asc')->get();
        return view('admin.comic.series.edit',compact('series','credit','category'));
    }

    public function update(Request $request, $id)
    {
        $series = ComicSeries::findOrFail($id);
        $series->title = $request->title;
        $series->slug = $request->slug;
        $series->review = $request->review;
        $series->credit_id = $request->credit_id;
        $series->category_id = $request->category_id;
        if($request->image){
          $image = $request->file('image');
          $imgName = time().'.'.$image->getClientOriginalExtension();
    			$request->image->move('images/comic', $imgName);
    			$series->images = $imgName;
    		}
        $series->update();
        return redirect('/backend/comic/series')->with('msg','Successfully updated data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $series = ComicSeries::findOrFail($id);
        $series->delete();
        return redirect('/backend/comic/series')->with('msg','Successfully updated data');
    }
}
