<?php

namespace App\Http\Controllers;

use App\Models\Mm;
use Illuminate\Http\Request;

class MmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mms =Mm::all();
        return view('mm.index',compact('mms'));
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


        $news=new Mm();
        $news->add_date= $request->add_date;
        $news->item=$request->item;
        $news->item_code=$request->item_code;
        $news->quantity=$request->quantity;
        $news->weight=$request->weight;
        $news->batch_number=$request->batch_number;
        $news->pr_data=$request->pr_data;
        $news->xpe_date=$request->xpe_date ;
        $news->notes=$request->notes;
        $news->save();
        session()->flash('Add', 'تم الحفظ  بنجاح ');
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
    public function update(Request $request, $id)
    {
        $news= Mm::findorfail($request->id);
        $news->add_date= $request->add_date;
        $news->item=$request->item;
        $news->item_code=$request->item_code;
        $news->quantity=$request->quantity;
        $news->weight=$request->weight;
        $news->batch_number=$request->batch_number;
        $news->pr_data=$request->pr_data;
        $news->xpe_date=$request->xpe_date ?? $news->xpe_date;
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
        $new= Mm::findorfail($request->id)->delete();
        session()->flash('danger', 'تم الحذف  بنجاح ');
        return back();
    }
}
