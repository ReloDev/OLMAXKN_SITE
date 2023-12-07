<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Es;
use App\Models\Notification;

class EsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nbre = Notification::count();
        $notifications = Notification::all();
        $ess = Es::all();
        return view('Es.index',[
            'ess' => $ess,
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
        return view('Es.create',[
            'nbre' => $nbre,
            'notifications' => $notifications
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nbre = Notification::count();
        $notifications = Notification::all();
        $es = new Es();
        $es->nom_es = $request->nom_es;
        $es->save();
        return redirect()->route('Es.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $nbre = Notification::count();
        $notifications = Notification::all();
        $es = Es::find($id);
        return view('Es.show',[
            'es' => $es,
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
        $es = Es::find($id);
        return view('Es.edit',[
            'es' => $es,
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
            'nom_es' => 'required'
        ]);
        $es = Es::whereId($id)->update($val);
        return redirect()->route('Es.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $nbre = Notification::count();
        $notifications = Notification::all();
        $es = Es::find($id)->delete();
        return redirect()->route('Es.index');
    }
}
