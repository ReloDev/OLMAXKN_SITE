<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Notification;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nbre = Notification::count();
        $notifications = Notification::all();
        $categories = Categorie::all();
        return view('Categorie.index',[
            'categories' => $categories,
            'nbre' => $nbre,
            'notifications' => $notifications
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nbre = Notification::count();
        $notifications = Notification::all();
        return view('Categorie.create',[
            'nbre' => $nbre,
            'notifications' => $notifications
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nbre = Notification::count();
        $notifications = Notification::all();
        $categorie = new Categorie();
        $categorie->designationCategorie = $request->designationCategorie;
        $categorie->save();
        return redirect()->route('Categorie.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nbre = Notification::count();
        $notifications = Notification::all();
        $categorie = Categorie::find($id);
        return view('Categorie.show',[
            'categorie' => $categorie,
            'nbre' => $nbre,
            'notifications' => $notifications
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nbre = Notification::count();
        $notifications = Notification::all();
        $categorie = Categorie::find($id);
        return view('Categorie.edit', [
            'categorie' => $categorie,
            'nbre' => $nbre,
            'notifications' => $notifications
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nbre = Notification::count();
        $notifications = Notification::all();
        $val = $request->validate([
            'designationCategorie' => 'required',
        ]);
        $categorie = Categorie::whereId($id)->update($val);
        return redirect()->route('Categorie.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorie = Categorie::find($id)->delete();
        return redirect()->route('Categorie.index');
    }
}
