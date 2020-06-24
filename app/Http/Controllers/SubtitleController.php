<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subtitle;
use Illuminate\Support\Facades\Input;
class SubtitleController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    public function index()
    {
        $subtitle = Subtitle::paginate(10);
        return view('admin.subtitle.index',compact('subtitle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subtitle.add');
    }

    public function store(Request $request)
    {
        $subtitle = new Subtitle;
        $subtitle->title = $request->title;
        if($request->image){
          $image = $request->file('image');
          $imgName = time().'.'.$image->getClientOriginalExtension();
    			$request->image->move('images/flag', $imgName);
    			$subtitle->image = $imgName;
    		}
        $subtitle->save();
        return redirect('/backend/subtitle')->with('msg','Successfully inserted data');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $subtitle = Subtitle::findOrFail($id);
        return view('admin.subtitle.edit',compact('subtitle'));
    }

    public function update(Request $request, $id)
    {
        $subtitle = Subtitle::findOrFail($id);
        $subtitle->title = $request->title;
        if($request->image){
          $image = $request->file('image');
          $imgName = time().'.'.$image->getClientOriginalExtension();
    			$request->image->move('images/flag', $imgName);
    			$subtitle->image = $imgName;
    		}
        $subtitle->update();
        return redirect('/backend/subtitle')->with('msg','Successfully updated data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subtitle = Subtitle::findOrFail($id);
        $subtitle->delete();
        return redirect('/backend/subtitle')->with('msg','Successfully deleted data');
    }
}
