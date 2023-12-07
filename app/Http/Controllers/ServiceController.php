<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Partenaire;
use App\Models\Notification;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nbre = Notification::count();
        $notifications = Notification::all();
        $services = Service::all();
        return view('Service.index',[
            'services' => $services,
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
        return view('Service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $path =  $request->file('imgservice')->store('imgservice', 'public');
        $service = new Service();
        $service->nom_service = $request->nom_service;
        $service->imgservice = $path;
        $service->description = $request->description;
        $service->save();
        return redirect()->route('Service.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $nbre = Notification::count();
        $notifications = Notification::all();
        $services =  Service::all();
        $c = Partenaire::count();
        $service = Service::find($id);
        return view('Service.show',[
            'service' => $service,
            'c' => $c,
            'services' => $services,
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
        $service = Service::find($id);
        return view('Service.edit',[
            'service' => $service,'nbre' => $nbre,
            'notifications' => $notifications
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $val = $request->validate([
            'nom_service' => 'required',
            'imgservice' => 'required',
            'description' => 'required',
        ]);

        $service = Service::whereId($id)->update($id);
        return redirect()->route('Service.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::find($id)->delete();
        return redirect()->route('Service.index');
    }
}
