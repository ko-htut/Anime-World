<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Series;
use App\Season;
use App\Episode;
use App\Subtitle;
use App\Dataplan;
use App\Credit;
use App\Category;
use App\ComicSeries;
use App\ComicSeason;
use App\ComicEpisode;

class ApiController extends Controller
{
    public function movie(){
      return Movie::orderBy('id','desc')->paginate(10);
    }
    
    public function series(){
        
        return Series::where('is_comic','=','0')->orderBy('id','desc')->paginate(10);
    }

    
    public function season(){
        return Season::orderBy('id','desc')->paginate(10);
    }
    
    public function seasonByseries($id){
        return Season::where('series_id','=',$id)->orderBy('title','asc')->get();
    }
    
    public function episodeByseason($id){
        return Episode::where('season_id',$id)->orderBy('title','asc')->get();
    }
    public function subtitle(){
        return Subtitle::orderBy('title','asc')->get();
    }
    
    public function dataplan(){
        return Dataplan::orderBy('title','asc')->get();
    }
    
    public function partner(){
        return Credit::orderBy('title','asc')->paginate(10);
    }
    
    public function category(){
        return Category::orderBy('title','asc')->paginate(10);
    }
    
    public function seriesComic(){
        return ComicSeries::orderBy('id','desc')->paginate(10);
    }
    public function seaseriesComic($id){
        return ComicSeason::orderBy('title','asc')->where('series_id','=',$id)->get();
    }
    public function seasonComic(){
        return ComicSeason::orderBy('title','asc')->paginate(10);
    }
    public function episeasonComic($id){
        return ComicEpisode::orderBy('title','asc')->where('season_id','=',$id)->get();
    }
    
}
