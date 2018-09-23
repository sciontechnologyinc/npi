<?php

namespace App\Http\Controllers;
use App\Faqs;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faqs::orderBy('id')->get();
        return view('faqs.index', ['faqs' => $faqs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faqs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $faqs = $request->all();
        $data = $request->validate([
           'question' => 'required',
           'answer' => 'required'
           
       ]);
       Faqs::create($data);
       return redirect()->back()->with('success','Added successfuly');
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
        $faq = Faqs::find($id);
        return view('faqs.edit', ['faq' => $faq]);
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
        $faq = Faqs::find($id);
        $data = $request->all();
        $faq->update($data);


        return redirect('/faqs')->with('success','Updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faqs = Faqs::find($id);
	    $faqs->destroy($id);


	    return redirect()->back()->with('success','Deleted successfuly');
    }
}
