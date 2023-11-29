<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee = Employe::find($id);
        $employee->cv = $employee->cv->first();
        return view('pages.employee.details', compact('employee'));
    }
    public function edit(string $id)
    {
        /* $employee = Employe::find($id);
        return view('pages.employee.edit', compact('employee')); */
        $employee = Employee::find($id);
        return view('employees.edit', compact('employee'));
    }
    public function update(Request $request, string $id)
    {
        // Validation des données du formulaire
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'matricule' => 'required|string|max:255',
            'grade' => 'required|string|max:255',
            'corps' => 'required|string|max:255',
            'sexe' => 'required|string|max:255',
            'service' => 'required|string|max:255',
            'cv' => 'file|mimes:pdf|', // Assurez-vous que le fichier est un fichier PDF et ne dépasse pas 2 Mo.
        ]);

        $employee = Employee::find($id);
        $employee->first_name = $request->input('first_name');
        $employee->last_name = $request->input('last_name');
        $employee->matricule = $request->input('matricule');
        $employee->grade = $request->input('grade');
        $employee->corps = $request->input('corps');
        $employee->sexe = $request->input('sexe');
        $employee->service = $request->input('service');
         

        // Gestion du fichier CV
        /* if ($request->hasFile('cv')) {
            $cvFile = $request->file('cv');
            $cvFileName = 'cv_' . time() . '.' . $cvFile->getClientOriginalExtension();
            $cvPath = $cvFile->storeAs('cv', $cvFileName, 'public');
            $employee->cv_path = $cvPath;
        } */

        $employee->save();

        return redirect()->route('employee.index')->with('success', 'Employé modifié ');
    }
    public function destroy(string $id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect()->route('employee.index')->with('success', 'Employé supprimé avec succès');
    }
}
