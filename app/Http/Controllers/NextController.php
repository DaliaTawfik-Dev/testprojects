<?php

namespace App\Http\Controllers;

use App\Models\Next;
use Illuminate\Http\Request;

use function Psy\bin;

class NextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nexts=Next::all();

    return view('NEXT.index', compact('nexts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new = new Next();
        $new->name = $request->name;
      $new->phone=$request->phone;
      $new->price=$request->price;
      $new->address=$request->address;
      $new->notes=$request->notes;
      $new->save();
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
          $new =  Next::findorfail($request->id);
        $new->name = $request->name;
        $new->phone=$request->phone;
        $new->price=$request->price;
        $new->address=$request->address;
        $new->notes=$request->notes;
        $new->save();
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
        $new =  Next::findorfail($request->id)->delete();
        return back();
    }
}
