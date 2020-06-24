<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ComicSeries;
use App\ComicSeason;

class ComicSeasonController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    public function index()
    {
        $season = ComicSeason::orderBy('id','desc')->paginate(10);
        return view('admin.comic.season.index',compact('season'));
    }

    public function create()
    {
        $series = ComicSeries::orderBy('title','asc')->get();
        return view('admin.comic.season.add',compact('series'));
    }

    public function store(Request $request)
    {
        $season = new ComicSeason;
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
        return redirect('/backend/comic/season')->with('msg','Successfully inserted data');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $season = ComicSeason::findOrFail($id);
        $series = ComicSeries::orderBy('id','desc')->get();
        return view('admin.comic.season.edit',compact('season','series'));
        
    }

    public function update(Request $request, $id)
    {
        $season = ComicSeason::findOrFail($id);
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
        return redirect('/backend/comic/season')->with('msg','Successfully updated data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $season = ComicSeason::findOrFail($id);
        $season->delete();
        return redirect('/backend/comic/season')->with('msg','Successfully deleted data');
    }
}
