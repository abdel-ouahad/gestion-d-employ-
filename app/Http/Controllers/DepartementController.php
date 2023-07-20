<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        $departements = Departement::withCount('employe')->paginate(10);
        return view('departements.index' , ['departements'=>$departements]);
    }


    public function create(){
        return view('departements.create');
    }


    public function store(Request $request){
        $validationdata = $request->validate([
            'name' => 'required',
        ]);

        $depart = new Departement;
        $depart->name = $request->name;
        $depart->save();
        $request->session()->flash('status','departement was Created successfully');
        return redirect()->route('departement.index');
    }
    public function show(string $id){
        $departement = Departement::findOrFail($id);
        // dd($departement);
        return view('departements.show', compact('departement'));
    }

    public function edit(string $id){}


    public function update(Request $request, string $id){}


    public function destroy(Request $request , string $id){
        Departement::destroy($id);
        $request->session()->flash('status','departement was deleted');
        return redirect()->route('departement.index');
    }
}
