<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Subtitle;
use App\Dataplan;
use App\Series;
use App\Season;
use App\Episode;
use App\Credit;
use App\Category;

class PageController extends Controller
{
    public function home(){
      $movie = Movie::orderBy('id','desc')->get();
      $category = Category::orderBy('title','asc')->get();
      $credit = Credit::orderBy('title','asc')->get();
      return view('index',compact('movie','category','credit'));
    }
    public function movie(){
      $movie = Movie::orderBy('id','desc')->paginate(12);
      $subtitle = Subtitle::get();
      $dataplan = Dataplan::get();
      return view('movie',compact('movie','subtitle','dataplan'));
    }

    public function movieDetail($id, $slug){
      $movie = Movie::findOrFail($id);
      $subtitle = Subtitle::get();
      $dataplan = Dataplan::get();
      $credit = Credit::get();
      $category = Category::get();
      return view('movie-detail',compact('movie','subtitle','dataplan','credit','category'));
    }

    public function series(){
      $series = Series::orderBy('id','desc')->paginate(12);
      $season = Season::orderBy('id','desc')->paginate(12);
      $scount = Season::count();
      $ecount = Episode::count();
      return view('series',compact('series','season','scount','ecount'));
    }

    public function seriesDetail($id, $slug){
      $series = Series::findOrFail($id);
      $season = Season::orderBy('title','asc')->get();
      $subtitle = Subtitle::get();
      $dataplan = Dataplan::get();
      $credit = Credit::get();
      $category = Category::get();
      return view('series-detail',compact('series','season','subtitle','dataplan','credit','category'));
    }

    public function season($id){
      $season = Season::findOrFail($id);
      $episode = Episode::orderBy('title','asc')->get();
      return view('season-detail',compact('season','episode'));
    }
    
    public function aboutus(){
        return view('about-us');
    }
    
    public function sortcategory($id,$slug){
        $category = Category::findOrFail($id);
        $movie = Movie::orderBy('id','desc')->get();
        $series = Series::orderBy('id','desc')->get();
        return view('sort-category',compact('category','movie','series'));
    }
    public function sortpartner($id){
        $credit = Credit::findOrFail($id);
        $movie = Movie::orderBy('id','desc')->get();
        $series = Series::orderBy('id','desc')->get();
        return view('sort-partner',compact('credit','movie','series'));
    }
}
