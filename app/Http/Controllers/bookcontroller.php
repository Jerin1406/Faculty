<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bookmodel;

class bookcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getbtitle=request('title');
        $getbauthor=request('author');
        $getbdesc=request('desc');
        $getbdist=request('dist');
        $getbprice=request('price');


        echo $getbtitle;
        echo "<br>";
        echo $getbauthor;
        echo "<br>";
        echo $getbdesc;
        echo "<br>";
        echo $getbdist;
        echo "<br>";
        echo $getbprice;

        $book=new bookmodel();
        $book->title=$getbtitle;
        $book->author=$getbauthor;
        $book->desc=$getbdesc;
        $book->dist=$getbdist;
        $book->price=$getbprice;

        $book->save();

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
        //
    }
}
