<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recrutement;
use App\Models\Poste;
use App\Models\Es;
use App\Models\Service;
use App\Models\Partenaire;
use App\Models\Notification;

class RecrutementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nbre = Notification::count();
        $notifications = Notification::all();
        $recrutements = Recrutement::all();
        return view('Recrutement.index',[
            'recrutements' => $recrutements,
            'nbre' => $nbre,
            'notifications' => $notifications
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nbre = Notification::count();
        $notifications = Notification::all();
        $c = Partenaire::count();
        $services = Service::all();
        $postes = Poste::all();
        $ess = Es::all();
        return view('Recrutement.create',[
            'ess' => $ess,
            'postes' => $postes,
            'services' => $services,
            'c' => $c,
            'nbre' => $nbre,
            'notifications' => $notifications
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pathcv = $request->file('cv')->store('cv', 'public');
        $recrutement = new Recrutement();
        $recrutement->nom = $request->nom;
        $recrutement->prenom = $request->prenom;
        $recrutement->tel = $request->tel;
        $recrutement->email = $request->email;
        $recrutement->id_es = $request->id_es;
        $recrutement->id_poste = $request->id_poste;
        $recrutement->motivation = $request->motivation;
        $recrutement->cv = $pathcv;
        $recrutement->save();
        return redirect()->route('Recrutement.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $nbre = Notification::count();
        $notifications = Notification::all();
        $recrutement = Recrutement::find($id);
        return view('Recrutement.show',[
            'recrutement' => $recrutement,
            'nbre' => $nbre,
            'notifications' => $notifications
        ]);
    }

    public function fichier(string $id)
    {
        $nbre = Notification::count();
        $notifications = Notification::all();
        $recrutement = Recrutement::find($id);
        return view('Recrutement.fichier',[
            'recrutement' => $recrutement,
            'nbre' => $nbre,
            'notifications' => $notifications
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $nbre = Notification::count();
        $notifications = Notification::all();
        $postes = Poste::all();
        $ess = Es::all();
        $recrutement = Recrutement::find($id);
        return view('Recrutement.edit',[
            'recrutement' => $recrutement,
            'ess' => $ess,
            'postes' => $postes,
            'nbre' => $nbre,
            'notifications' => $notifications
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $val = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'tel' => 'required',
            'email' => 'required',
            'id_es' => 'required',
            'id_poste' => 'required',
            'motivation' => 'required',
            'cv' => 'required',
        ]);
        $recrutement = Recrutement::whereId($id)->upadate($val);
        return redirect()->route('Recrutement.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $recrutement = Recrutement::find($id)->delete();
        return redirect()->route('Recrutement.index');
    }
}
