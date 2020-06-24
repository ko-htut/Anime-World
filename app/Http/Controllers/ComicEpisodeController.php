<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ComicSeries;
use App\ComicSeason;
use App\ComicEpisode;

class ComicEpisodeController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }
  
    public function index()
    {
        $episode = ComicEpisode::orderBy('id','desc')->paginate(10);
        $season = ComicSeason::get();
        $series = ComicSeries::get();
        return view('admin.comic.episode.index',compact('episode','season','series'));
    }

    public function create()
    {
      $season = ComicSeason::get();
      $series = ComicSeries::get();
      return view('admin.comic.episode.add',compact('season','series'));
    }

    public function store(Request $request)
    {
        $episode = new ComicEpisode;
        $episode->title = $request->title;
        $episode->slug = $request->slug;
        if($request->link){
            $file = $request->file('link');
            $fileName = uniqid() . $request->link->getClientOriginalName();
    	    $request->link->move('pdf', $fileName);
    		$episode->link = $fileName;
    	}
        $episode->season_id = $request->season_id;
        $episode->save();
        return redirect('/backend/comic/episode')->with('msg','Successfully inserted data!');
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
      $episode = ComicEpisode::findOrFail($id);
      $season = ComicSeason::get();
      $series = ComicSeries::get();
      return view('admin.comic.episode.edit',compact('episode','season','series'));
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
        $episode = ComicEpisode::findOrFail($id);
        $episode->title = $request->title;
        $episode->slug = $request->slug;
        if($request->link){
            $file = $request->file('link');
            $fileName = uniqid() . $request->link->getClientOriginalName();
    	    $request->link->move('pdf', $fileName);
    		$episode->link = $fileName;
    	}
        $episode->season_id = $request->season_id;
        $episode->update();
        return redirect('/backend/comic/episode')->with('msg','Successfully updated data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $episode = ComicEpisode::findOrFail($id);
        $episode->delete();
        return redirect('/backend/comic/episodes')->with('msg','Successfully deleted data!');
    }
    
  
}
