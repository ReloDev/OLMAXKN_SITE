<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poste;
use App\Models\Option;
use App\Models\Notification;

class PosteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nbre = Notification::count();
        $notifications = Notification::all();
        $postes = Poste::all();
        return view('Poste.index',[
            'postes' => $postes,
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
        $options = Option::all();
        return view('Poste.create',[
            'options' => $options,
            'nbre' => $nbre,
            'notifications' => $notifications
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $poste = new Poste();
        $poste->nom_poste = $request->nom_poste;
        $poste->id_option = $request->id_option;
        $poste->save();
        return redirect()->route('Poste.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $nbre = Notification::count();
        $notifications = Notification::all();
        $poste = Poste::find($id);
        return view('Poste.show',[
            'poste' => $poste,
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
        $options = Option::all();
        $poste = Poste::find($id);
        return view('Poste.edit',[
            'poste' => $poste,
            'options' => $options,
            'nbre' => $nbre,
            'notifications' => $notifications,
            'nbre' => $nbre,
            'notifications' => $notifications
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $nbre = Notification::count();
        $notifications = Notification::all();
        $val = $request->validate([
            'nom_poste' => 'required',
            'id_option' => 'required'
        ]);
        $poste = Poste::whereId($id)->update($val);
        return redirect()->route('Poste.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $poste = Poste::find($id)->delete();
        return redirect()->route('Poste.index');
    }
}
