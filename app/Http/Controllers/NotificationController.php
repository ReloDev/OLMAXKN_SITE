<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nbre = Notification::count();
        $notifications = Notification::all();
        $notifications = Notification::all();
        return view('Message.index',[
            'notifications' => $notifications,
            'nbre' => $nbre,
            'notifications' => $notifications
        ]);
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
        $notification = new Notification();
        $notification->nom = $request->nom;
        $notification->email = $request->email;
        $notification->sujet = $request->sujet;
        $notification->message = $request->message;
        $notification->save();
        return redirect()->route('contact');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id,Request $request)
    {
        $nbre = Notification::count();
        $notifications = Notification::all();
        $notification = Notification::find($id);
        Notification::whereId($id)->update(['lu'=>1]);
        return view('Message.show',[
            'notification' => $notification,
            'nbre' => $nbre,
            'notifications' => $notifications
        ]);
    }

    public function nonlu(string $id,Request $request)
    {
        $nbre = Notification::count();
        $notifications = Notification::all();
        $notification = Notification::find($id);
        Notification::whereId($id)->update(['lu'=>0]);
        return view('Message.index',[
            'notification' => $notification,
            'nbre' => $nbre,
            'notifications' => $notifications
        ]);
    }

    public function message_lu(Request $request)
    {
        $nbre = Notification::count();
        $notifications = Notification::all()->where('lu',1);
        return view('Message.lu',[
            'nbre' => $nbre,
            'notifications' => $notifications
        ]);
    }

    public function message_nonlu(Request $request)
    {
        $nbre = Notification::count();
        $notifications = Notification::all()->where('lu',0);
        return view('Message.nonlu',[
            'nbre' => $nbre,
            'notifications' => $notifications
        ]);
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
