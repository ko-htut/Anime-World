<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dataplan;

class DataplanController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }
    public function index()
    {
        $dataplan = Dataplan::get();
        return view('admin.dataplan.index', compact('dataplan'));
    }

    public function create()
    {
        return view('admin.dataplan.add');
    }

    public function store(Request $request)
    {
        $dataplan = new Dataplan;
        $dataplan->title = $request->title;
        $dataplan->save();
        return redirect('/backend/dataplan')->with('msg','Successfully inserted data');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $dataplan = Dataplan::findOrFail($id);
        return view('admin.dataplan.edit', compact('dataplan'));
    }

    public function update(Request $request, $id)
    {
        $dataplan = Dataplan::findOrFail($id);
        $dataplan->title = $request->title;
        $dataplan->update();
        return redirect('/backend/dataplan')->with('msg','Successfully updated data');
    }

    public function destroy($id)
    {
      $dataplan = Dataplan::findOrFail($id);
      $dataplan->delete();
      return redirect('/backend/dataplan')->with('msg','Successfully deleted data');
    }
}
