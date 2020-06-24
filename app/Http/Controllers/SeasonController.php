<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Series;
use App\Season;

class SeasonController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    public function index()
    {
        $season = Season::orderBy('id','desc')->paginate(10);
        return view('admin.season.index',compact('season'));
    }

    public function create()
    {
        $series = Series::orderBy('title','asc')->get();
        return view('admin.season.add',compact('series'));
    }

    public function store(Request $request)
    {
        $season = new Season;
        $season->title = $request->title;
        $season->slug = $request->slug;
        $season->review = $request->review;
        $season->series_id = $request->series_id;
        if($request->image){
          $image = $request->file('image');
          $imgName = time().'.'.$image->getClientOriginalExtension();
    			$request->image->move('images/season', $imgName);
    			$season->image = $imgName;
    		}
        $season->save();
        return redirect('/backend/series/season')->with('msg','Successfully inserted data');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $season = Season::findOrFail($id);
        $series = Series::orderBy('id','desc')->get();
        return view('admin.season.edit',compact('season','series'));
        
    }

    public function update(Request $request, $id)
    {
        $season = Season::findOrFail($id);
        $season->title = $request->title;
        $season->slug = $request->slug;
        $season->review = $request->review;
        $season->series_id = $request->series_id;
        if($request->image){
          $image = $request->file('image');
          $imgName = time().'.'.$image->getClientOriginalExtension();
    			$request->image->move('images/season', $imgName);
    			$season->image = $imgName;
    		}
        $season->update();
        return redirect('/backend/series/season')->with('msg','Successfully updated data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $season = Season::findOrFail($id);
        $season->delete();
        return redirect('/backend/series/season')->with('msg','Successfully deleted data');
    }
}
