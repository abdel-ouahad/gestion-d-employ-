<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\Departement;
use Illuminate\Http\Request;

class EmployeController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        // $employes = Employe::paginate(10);
        // return view('employe.index' , ['employes'=>$employes ]);
        $employes = Employe::with('departement')->paginate(10);
        // dd($employes);
        return view('employe.index', compact('employes'));
    }


    public function create(){
        return view('employe.create');
    }


    public function store(Request $request){
        $validated = $request->validate([
            'fullname' => 'bail|required||max:255',
            'registretion_number' => 'required',
            'phone' => 'required',
            'adresse' => 'required',
            'city' => 'required',
            'hire_date' => 'bail|required|date',
            'departement' => 'required'
        ]);
        
        $employe = new Employe;
        $employe->id = $request->id;
        $employe->fullname = $request->fullname;
        $employe->registretion_number = $request->registretion_number;
        $employe->phone = $request->phone;
        $employe->adresse = $request->adresse;
        $employe->city = $request->city;
        $employe->hire_date = $request->hire_date;
        $depart = Departement::where('name', $request->departement)->first();
        $employe->departement_id = $depart->id;
        $employe->save();
        return redirect()->route('employe.index')->with('status', 'employe was been append succesefully');


    }

    public function show(string $id){
        $employe = Employe::with('departement')->findOrFail($id);
        return view('employe.show' ,[ 'employe'=>$employe]);
    }


    public function edit(string $id){
        $employe = Employe::find($id);
        return view('employe.edit' ,[ 'employe'=>$employe]);
    }

    public function update(Request $request, string $id){
        $validated = $request->validate([
            'fullname' => 'bail|required||max:255',
            'registretion_number' => 'required',
            'phone' => 'required',
            'adresse' => 'required',
            'city' => 'required',
            'hire_date' => 'bail|required|date',
        ]);

        $employe = Employe::find($id);
        $employe->fullname = $request->fullname;
        $employe->registretion_number = $request->registretion_number;
        $employe->phone = $request->phone;
        $employe->adresse = $request->adresse;
        $employe->city = $request->city;
        $employe->hire_date = $request->hire_date;
        $depart = Departement::where('name', $request->departement)->first();
        $employe->departement_id = $depart->id;
        $employe->update();

        return redirect()->route('employe.index')->with('status', 'employe was been updated succesefully');
    }


    public function destroy(string $id){
        Employe::destroy($id);
        return redirect()->route('employe.index')->with('status', 'employe was been deleted succesefully');

    }

    public function vacationrequest(string $id){
        $employe = Employe::find($id);
        return view('employe.vacationrequest' , ['employe'=>$employe]);
    }
    public function workcertification(string $id){
        $employe = Employe::find($id);
        return view('employe.workcertification' , ['employe'=>$employe]);
    }

}
