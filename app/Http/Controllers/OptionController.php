<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option;
use App\Models\Notification;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nbre = Notification::count();
        $notifications = Notification::all();
        $options = Option::all();
        return view('Option.index',[
            'options' => $options,
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
        return view('Option.create',[
            'nbre' => $nbre,
            'notifications' => $notifications
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $option = new Option();
        $option->nom_option = $request->nom_option;
        $option->save();
        return redirect()->route('Option.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $nbre = Notification::count();
        $notifications = Notification::all();
        $option = Option::find($id);
        return view('Option.show',[
            'option' => $option,
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
        $option = Option::find($id);
        return view('Option.edit',[
            'option' => $option,
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
            'nom_option' => 'required'
        ]);

        $option = Option::whereId($id)->update($val);
        return redirect()->route('Option.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $option = Option::find($id)->delete();
        return redirect()->route('Option.index');
    }
}
