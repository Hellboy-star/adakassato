<?php

namespace App\Http\Controllers;

use App\Models\Sujets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SujetsController extends Controller
{

    // public function __construct() 
    // {
    //     $this->middleware('auth')->except(['index', 'show']);
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $empsa=Sujets::latest()->paginate(10);
        return view('sujets', compact('empsa'));
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
        //
        $id = new Sujets;
        $id->auteur = $request->input('auteur');
        $id->theme = $request->input('theme');
        $id->texte = $request->input('texte');
        $id->save();
        return back()->withStatus('success', 'Ajout réussi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sujets
     * @return \Illuminate\Http\Response
     */
    public function show(Sujets $sujets)
    {
        //
        return view('blog', compact('sujets'));
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
        Sujets::destroy($id);
        return redirect('/dashboard');
    }
}
