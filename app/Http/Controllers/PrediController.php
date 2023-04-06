<?php

namespace App\Http\Controllers;

use App\Models\Predi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PrediController extends Controller
{
    
    // public function __construct() 
    // {
    //     $this->middleware('auth')->except(['index', 'view', 'download']);
    // }

    //
    public function index() {
        //
        $emps=predi::all();
        return view('predi', compact('emps'));
    }

    public function store(Request $request) {
        //

        $data=new Predi;
        $file=$request->file;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $request->file->move('assets', $filename);
        $data->file=$filename;
        $data->name=$request->name;
        $data->description=$request->description;
        $data->save();
        //return view('predi')->with('alert', 'Ajout réussi');
        return back()->withStatus('success', 'Ajout réussi');
    }
    
    public function show($id) {
        //


        $id=Predi::find($id);
        // dd($file);
        // return view('vpredi', compact('id'));

        $id=Predi::find($id);
        return view('vpredi', compact('id'));
    }
   
    public function download($id) {
        //return response()->download(public_path('assets/'.$file));
        //$lien = 'assets/'.$file ;
        //return Storage::download('$lien');
        //return back()->download(public_path('assets/'.$file));
        //return Storage::download('$file', '$name');
        $id=Predi::find($id);
        $id=Predi::find($id);
        return back()->download('$file', '$name');
    }

    public function view(Request $request, $id) {

        // $id=Predi::find($id);
        // return view('vpredi', compact('id'));

        $id = Predi::find($request->predi_id);
        if($id){
         return response()->json([
             'status'=>200,
             'predi'=>$id
         ]);
        } 

    }

   
}
