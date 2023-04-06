<?php

namespace App\Http\Controllers;

use App\Models\Even;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EvenController extends Controller
{
    
    // public function __construct() 
    // {
    //     $this->middleware('auth')->except(['index']);
    // }

    //
    public function index() {
        //
        $empsa=Even::all();
        return view('even', compact('empsa'));
    }

    public function store(Request  $request) {
        //
        $id = new Even;
        $id->NOM = $request->input('NOM');
        $id->DATE = $request->input('DATE');
        // $id->DATEACID = $request->input('DATEACID');
        $id->save();
        //return view('even')->with('alert', 'Ajout réussi');
        return back()->withStatus('success', 'Ajout réussi');
    }

    public function fetchev() {
        $empa = Even::all();
        $empsa = DB::select("select * from even ");
        $output = '';
        if ($empa->count() > 0) {
            $output .= '<table id="data-table-buttons" class="table0 table table-striped table-bordered align-middle">
           <thead>
           <tr>
           <th>N°</th>
            <th>Evènements</th>
            <th colspan="2">Date</th>
            
            </tr>
            </thead>
            <tbody>';
            foreach ($empsa as $emp) {
                $output .= '<tr height="127%">
                <td>' . $emp->id . '</td>
                <td>' . $emp->NOM . '</td>
                <td>' . $emp->DATE . '</td>
              </tr>';
            }
            $output .= '</tbody></table>';
            echo $output;
        } else {
            echo '<h1 class="text-center text-secondary my-5">Aucune donnée</h1>';
        }
    }
}
