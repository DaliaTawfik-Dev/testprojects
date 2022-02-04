<?php

namespace App\Http\Controllers;

use App\Http\Requests\RawRequest;
use App\Models\Raw;
use Illuminate\Http\Request;

class RawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $raws=Raw::all();
        return view('raw.index',compact('raws'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RawRequest $request)
    {
       // dd($request->customername);
        $news= new Raw();
        $news->customername=$request->customername;
        $news->price= $request->price;
        $news->phone=$request->phone;
        $news->ordernumber=$request->ordernumber;
        $news->item=$request->item;
        $news->date=$request->date;
        $news->weight=$request->weight;
        $news->quantity=$request->quantity;
        $news->total=$request->total;
        $news->notes=$request->notes;
        $news->save();
        session()->flash('Add', 'تم اضافه  بنجاح ');
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( RawRequest $request, $id)
    {
        $news= Raw::findorfail($request->id);
        $news-> customername=$request->customername;
        $news->price= $request->price;
        $news->phone=$request->phone;
        $news->ordernumber=$request->ordernumber;
        $news->item=$request->item;
        $news->date=$request->date;
        $news->weight=$request->weight;
        $news->quantity=$request->quantity;
        $news->total=$request->total;
        $news->notes=$request->notes;
        $news->save();
        session()->flash('Add', 'تم التعديل  بنجاح ');
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $news= Raw::findorfail($request->id)->delete();
      session()->flash('danger', 'تم حذف  بنجاح ');
      return back();
    }
}
