<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Series;
use App\Subtitle;
use App\Dataplan;
use App\Season;
use App\Credit;
use App\Category;

class SeriesController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    public function index()
    {
        $series = Series::orderBy('id','desc')->paginate(10);
        return view('admin.series.index',compact('series'));
    }

    public function create()
    {
        $subtitle = Subtitle::orderBy('title','asc')->get();
        $dataplan = Dataplan::orderBy('title','asc')->get();
        $credit = Credit::orderBy('title','asc')->get();
        $category = Category::orderBy('title','asc')->get();
        return view('admin.series.add',compact('subtitle','dataplan','credit','category'));
    }

    public function store(Request $request)
    {
        $series = new Series;
        $series->title = $request->title;
        $series->slug = $request->slug;
        $series->review = $request->review;
        $series->subtitle_id = $request->subtitle;
        $series->dataplan_id = $request->dataplan;
        $series->credit_id = $request->credit_id;
        $series->category_id = $request->category_id;
        $series->is_comic = $request->is_comic;
        if($request->image){
          $image = $request->file('image');
          $imgName = time().'.'.$image->getClientOriginalExtension();
    			$request->image->move('images/series', $imgName);
    			$series->images = $imgName;
    		}
        $series->save();
        return redirect('/backend/series/series')->with('msg','Successfully inserted data');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $series = Series::findOrFail($id);
        $subtitle = Subtitle::orderBy('title','asc')->get();
        $dataplan = Dataplan::orderBy('title','asc')->get();
        $credit = Credit::orderBy('title','asc')->get();
        $category = Category::orderBy('title','asc')->get();
        return view('admin.series.edit',compact('series','subtitle','dataplan','credit','category'));
    }

    public function update(Request $request, $id)
    {
        $series = Series::findOrFail($id);
        $series->title = $request->title;
        $series->slug = $request->slug;
        $series->review = $request->review;
        $series->subtitle_id = $request->subtitle;
        $series->dataplan_id = $request->dataplan;
        $series->credit_id = $request->credit_id;
        $series->category_id = $request->category_id;
        $series->is_comic = $request->is_comic;
        if($request->image){
          $image = $request->file('image');
          $imgName = time().'.'.$image->getClientOriginalExtension();
    			$request->image->move('images/series', $imgName);
    			$series->images = $imgName;
    		}
        $series->update();
        return redirect('/backend/series/series')->with('msg','Successfully updated data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $series = Series::findOrFail($id);
        $series->delete();
        return redirect('/backend/series/series')->with('msg','Successfully updated data');
    }
}
