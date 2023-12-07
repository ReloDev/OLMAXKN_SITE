<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partenaire;
use App\Models\Article;
use App\Models\Service;
use App\Models\Notification;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nbre = Notification::count();
        $notifications = Notification::all();
        $articles = Article::all();
        return view('Article.index',[
            'articles' => $articles,
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
        return view('Article.create',[
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
        $path =  $request->file('article')->store('article', 'public');
        $article = new Article();
        $article->nom = $request->nom;
        $article->description = $request->description;
        $article->categorie = $request->categorie;
        $article->prix = $request->prix;
        $article->article = $path;
        $article->save();
        return redirect()->route('Article.create');
    }

    public function fichier(string $id)
    {
        $nbre = Notification::count();
        $notifications = Notification::all();
        $article = Article::find($id);
        return view('Article.fichier',[
            'article' => $article,
            'nbre' => $nbre,
            'notifications' => $notifications
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $nbre = Notification::count();
        $notifications = Notification::all();
        $article = Article::find($id);
        return view('Article.show',[
            'article' => $article,
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
        $article = Article::find($id);
        return view('Article.edit',[
            'article' => $article,
            'nbre' => $nbre,
            'notifications' => $notifications
        ]);
    }

    public function detail(string $id)
    {
        $nbre = Notification::count();
        $notifications = Notification::all();
        $partenaires = Partenaire::all();
        $services = Service::all();
        $c = Partenaire::count();
        $article = Article::find($id);
        return view('Article.detail',[
            'article' => $article,
            'services' => $services,
            'c' => $c,
            'partenaires' => $partenaires,
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
            'nom' => 'required',
            'description' => 'required',
            'categorie' => 'required',
        ]);
        $article = Article::whereId($id)->update($val);
        return redirect()->route('Article.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $nbre = Notification::count();
        $notifications = Notification::all();
        $article = Article::find($id)->delete();
        return redirect()->route('Article.index');
    }
}
