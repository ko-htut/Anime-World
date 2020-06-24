<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Series;
use App\Season;
use App\Episode;

class EpisodeController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }
  
    public function index()
    {
        $episode = Episode::orderBy('id','desc')->paginate(10);
        $season = Season::get();
        $series = Series::get();
        return view('admin.episode.index',compact('episode','season','series'));
    }

    public function create()
    {
      $season = Season::get();
      $series = Series::get();
      return view('admin.episode.add',compact('season','series'));
    }

    public function store(Request $request)
    {
        $episode = new Episode;
        $episode->title = $request->title;
        $episode->slug = $request->slug;
        $episode->link = $request->link;
        $episode->season_id = $request->season_id;
        $episode->save();
        return redirect('/backend/series/episodes')->with('msg','Successfully inserted data!');
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
      $episode = Episode::findOrFail($id);
      $season = Season::get();
      $series = Series::get();
      return view('admin.episode.edit',compact('episode','season','series'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $episode = Episode::findOrFail($id);
        $episode->title = $request->title;
        $episode->slug = $request->slug;
        $episode->link = $request->link;
        $episode->season_id = $request->season_id;
        $episode->update();
        return redirect('/backend/series/episodes')->with('msg','Successfully updated data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $episode = Episode::findOrFail($id);
        $episode->delete();
        return redirect('/backend/series/episodes')->with('msg','Successfully deleted data!');
    }
    
    public function comicIndex()
    {
        $episode = Episode::orderBy('id','desc')->paginate(10);
        $season = Season::get();
        $series = Series::get();
        return view('admin.episode.comic-index',compact('episode','season','series'));
    }

    public function comicCreate()
    {
      $season = Season::get();
      $series = Series::get();
      return view('admin.episode.comic-add',compact('season','series'));
    }

    public function comicStore(Request $request)
    {
        $episode = new Episode;
        $episode->title = $request->title;
        $episode->slug = $request->slug;
        $episode->link = $request->link;
        if($request->link){
            $file = $request->file('link');
            $fileName = uniqid() . $request->get('link')->getClientOriginalName();
    	    $request->link->move('pdf', $fileName);
    		$series->link = $fileName;
    	}
        $episode->season_id = $request->season_id;
        $episode->save();
        return redirect('/backend/series/comic-episodes')->with('msg','Successfully inserted data!');
    }

    public function comicShow($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function comicEdit($id)
    {
      $episode = Episode::findOrFail($id);
      $season = Season::get();
      $series = Series::get();
      return view('admin.episode.edit',compact('episode','season','series'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function comicUpdate(Request $request, $id)
    {
        $episode = Episode::findOrFail($id);
        $episode->title = $request->title;
        $episode->slug = $request->slug;
        $episode->link = $request->link;
        $episode->season_id = $request->season_id;
        $episode->update();
        return redirect('/backend/series/episodes')->with('msg','Successfully updated data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function comicDestroy($id)
    {
        $episode = Episode::findOrFail($id);
        $episode->delete();
        return redirect('/backend/series/episodes')->with('msg','Successfully deleted data!');
    }
}
