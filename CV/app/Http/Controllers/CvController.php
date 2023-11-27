<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cv;
use App\Models\Employe;
use HepplerDotNet\FlashToastr\Flash;
use Illuminate\Http\Request;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employe::all();

        return view('pages.CV.liste', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Flash::info('CV','archivé avec succès');
        return view('pages.CV.importe');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validation des données reçues
        $validatedData = $request->validate([
            'matricule' => 'required|string',
            'prenom' => 'required|string',
            'nom' => 'required|string',
            'sexe' => 'required|in:M,F',
            'service' => 'required|string',
            'grade' => 'required|string',
            'corps' => 'required|string',
            'fichier' => 'required|file',
        ]);

//        dd($request->all(),$request->hasFile('fichier'));
        // Traitement des données (par exemple, enregistrer dans la base de données)
        // Ici, vous pourriez créer une nouvelle instance de votre modèle et sauvegarder les données

        $employee = new Employe();
        $employee->matricule = $validatedData['matricule'];
        $employee->first_name = $validatedData['prenom'];
        $employee->last_name = $validatedData['nom'];
        $employee->sexe = $validatedData['sexe'];
        $employee->service = strtoupper($validatedData['service']);
        $employee->grade = $validatedData['grade'];
        $employee->corps = $validatedData['corps'];

        if ($employee->save()) {
            if ($request->hasFile('fichier')) {
                // Stocker le fichier dans le système de fichiers
                $path = $request->file('fichier')->store('dossier', 'public');
                $cv = new Cv();
                $cv->id_employee = $employee->employee_id;
                $cv->path = $path;
                $cv->save();

                // Vous pouvez enregistrer $path dans votre base de données si nécessaire
            }
        } else {
        }


        // Redirection ou autre logique post-enregistrement
        return redirect()->route('cv-import');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
