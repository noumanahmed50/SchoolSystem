<?php

namespace App\Http\Controllers;
use App\Models\Payment;
use App\Models\SchoolClass;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $my_classes = Payment::all();
       
        return view('payment.index', compact('my_classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $my_classes = SchoolClass::get()->all();
        return view('payment.create', compact('my_classes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            "title" => "required",
            "class_id" => "required",
            "method" => "required",
            "amount" => "required",
            "ref_no" => "required",
            "year" =>"required"
        ]);
       Payment::create([
            "title" => $request->title,
            "class_id" => $request->class_id,
            "method" =>  $request->method,
            "amount" =>  $request->amount,
            "ref_no" =>  $request->ref_no,
            "description" =>  $request->description,
            "year" => $request->year,
       ]);
       
       
       return redirect('/index');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data= payment::where('id', $id);
        $data->delete();
        return back()->withError('data delete Successfuly');
    }
}
