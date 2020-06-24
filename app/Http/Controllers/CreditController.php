<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Credit;

class CreditController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }
  
    public function index()
    {
        $credit = Credit::orderBy('title','asc')->paginate(10);
        return view('admin.credit.index',compact('credit'));
    }

    public function create()
    {
        return view('admin.credit.add');
    }

    public function store(Request $request)
    {
        $credit = new Credit;
        $credit->title = $request->title;
        $credit->slug = $request->slug;
        $credit->link = $request->link;
        $credit->page_id = $request->page_id;
        if($request->image){
          $image = $request->file('image');
          $imgName = time().'.'.$image->getClientOriginalExtension();
    			$request->image->move('images/upload', $imgName);
    			$credit->image = $imgName;
    		}
        $credit->save();
        return redirect('/backend/credit');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $credit = Credit::findOrFail($id);
        return view('admin.credit.edit',compact('credit'));
    }

    public function update(Request $request, $id)
    {
        $credit = Credit::findOrFail($id);
        $credit->title = $request->title;
        $credit->slug = $request->slug;
        $credit->link = $request->link;
        $credit->page_id = $request->page_id;
        if($request->image){
          $image = $request->file('image');
          $imgName = time().'.'.$image->getClientOriginalExtension();
    			$request->image->move('images/upload/', $imgName);
    			$credit->image = $imgName;
    		}
        $credit->update();
        return redirect('/backend/credit');

    }

    public function destroy($id)
    {
        $credit = Credit::findOrFail($id);
        $credit->delete();
        return redirect('/backend/credit');
    }
}
