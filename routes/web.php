<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PosteController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\RealisationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\RecrutementController;
use App\Http\Controllers\EsController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\PartenaireController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NotificationController;
use App\Models\Service;
use App\Models\Realisation;
use App\Models\Annonce;
use App\Models\Categorie;
use App\Models\Partenaire;
use App\Models\Notification;
use App\Models\Employe;
use App\Models\Article;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/dashyout', function () {
        $nbre = Notification::count();
        $notifications = Notification::orderBy('created_at', 'desc')->limit(4)->get();
        return view('dashyout',[
            'nbre' => $nbre,
            'notifications' => $notifications
        ]);
    })->name('dashyout');


//Poste
Route::get('/Poste/create',[PosteController::class,'create'])->name('Poste.create');
Route::get('Poste/index',[PosteController::class,'index'])->name('Poste.index');
Route::post('Poste/store',[PosteController::class,'store'])->name('Poste.store');
Route::get('Poste/show/{id}',[PosteController::class,'show'])->name('Poste.show');
Route::get('Poste/edit/{id}',[PosteController::class,'edit'])->name('Poste.edit');
Route::get('Poste/delete/{id}',[PosteController::class,'destroy'])->name('Poste.destroy');
Route::post('Poste/update/{id}',[PosteController::class,'update'])->name('Poste.update');

//Employe
Route::get('/Employe/create',[EmployeController::class,'create'])->name('Employe.create');
Route::get('Employe/index',[EmployeController::class,'index'])->name('Employe.index');
Route::post('Employe/store',[EmployeController::class,'store'])->name('Employe.store');
Route::post('Employe/admin_store/{id}',[EmployeController::class,'admin_store'])->name('Employe.admin_store');
Route::post('Employe/admin_reverse/{id}',[EmployeController::class,'admin_reverse'])->name('Employe.admin_reverse');
Route::get('Employe/show/{id}',[EmployeController::class,'show'])->name('Employe.show');
Route::get('Employe/fichier/{id}',[EmployeController::class,'fichier'])->name('Employe.fichier');
Route::get('Employe/edit/{id}',[EmployeController::class,'edit'])->name('Employe.edit');
Route::get('Employe/delete/{id}',[EmployeController::class,'destroy'])->name('Employe.destroy');
Route::post('Employe/update/{id}',[EmployeController::class,'update'])->name('Employe.update');

//Realisation
Route::get('/Realisation/create',[RealisationController::class,'create'])->name('Realisation.create');
Route::get('Realisation/index',[RealisationController::class,'index'])->name('Realisation.index');
Route::post('Realisation/store',[RealisationController::class,'store'])->name('Realisation.store');
Route::get('Realisation/show/{id}',[RealisationController::class,'show'])->name('Realisation.show');
Route::get('Realisation/edit/{id}',[RealisationController::class,'edit'])->name('Realisation.edit');
Route::get('Realisation/fichier/{id}',[RealisationController::class,'fichier'])->name('Realisation.fichier');
Route::get('Realisation/delete/{id}',[RealisationController::class,'destroy'])->name('Realisation.destroy');
Route::post('Realisation/update/{id}',[RealisationController::class,'update'])->name('Realisation.update');

//Service
Route::get('/Service/create',[ServiceController::class,'create'])->name('Service.create');
Route::get('Service/index',[ServiceController::class,'index'])->name('Service.index');
Route::post('Service/store',[ServiceController::class,'store'])->name('Service.store');
Route::get('Service/show/{id}',[ServiceController::class,'show'])->name('Service.show');
Route::get('Service/edit/{id}',[ServiceController::class,'edit'])->name('Service.edit');
Route::get('Service/delete/{id}',[ServiceController::class,'destroy'])->name('Service.destroy');
Route::post('Service/update/{id}',[ServiceController::class,'update'])->name('Service.update');

//Annonce
Route::get('/Annonce/create',[AnnonceController::class,'create'])->name('Annonce.create');
Route::get('Annonce/index',[AnnonceController::class,'index'])->name('Annonce.index');
Route::post('Annonce/store',[AnnonceController::class,'store'])->name('Annonce.store');
Route::get('Annonce/show/{id}',[AnnonceController::class,'show'])->name('Annonce.show');
Route::get('Annonce/fichier/{id}',[AnnonceController::class,'fichier'])->name('Annonce.fichier');
Route::get('Annonce/edit/{id}',[AnnonceController::class,'edit'])->name('Annonce.edit');
Route::get('Annonce/delete/{id}',[AnnonceController::class,'destroy'])->name('Annonce.destroy');
Route::post('Annonce/update/{id}',[AnnonceController::class,'update'])->name('Annonce.update');

//Recrutement
Route::get('/Recrutement/create',[RecrutementController::class,'create'])->name('Recrutement.create');
Route::get('Recrutement/index',[RecrutementController::class,'index'])->name('Recrutement.index');
Route::post('Recrutement/store',[RecrutementController::class,'store'])->name('Recrutement.store');
Route::get('Recrutement/show/{id}',[RecrutementController::class,'show'])->name('Recrutement.show');
Route::get('Recrutement/edit/{id}',[RecrutementController::class,'edit'])->name('Recrutement.edit');
Route::get('Recrutement/delete/{id}',[RecrutementController::class,'destroy'])->name('Recrutement.destroy');
Route::post('Recrutement/update/{id}',[RecrutementController::class,'update'])->name('Recrutement.update');
Route::get('Recrutement/fichier/{id}',[RecrutementController::class,'fichier'])->name('Recrutement.fichier');

//Es
Route::get('/Es/create',[EsController::class,'create'])->name('Es.create');
Route::get('Es/index',[EsController::class,'index'])->name('Es.index');
Route::post('Es/store',[EsController::class,'store'])->name('Es.store');
Route::get('Es/show/{id}',[EsController::class,'show'])->name('Es.show');
Route::get('Es/edit/{id}',[EsController::class,'edit'])->name('Es.edit');
Route::get('Es/delete/{id}',[EsController::class,'destroy'])->name('Es.destroy');
Route::post('Es/update/{id}',[EsController::class,'update'])->name('Es.update');

//Commentaire
Route::get('/Commentaire/create',[CommentaireController::class,'create'])->name('Commentaire.create');
Route::get('Commentaire/index',[CommentaireController::class,'index'])->name('Commentaire.index');
Route::post('Commentaire/store',[CommentaireController::class,'store'])->name('Commentaire.store');
Route::get('Commentaire/show/{id}',[CommentaireController::class,'show'])->name('Commentaire.show');
Route::get('Commentaire/edit/{id}',[CommentaireController::class,'edit'])->name('Commentaire.edit');
Route::get('Commentaire/delete/{id}',[CommentaireController::class,'destroy'])->name('Commentaire.destroy');
Route::post('Commentaire/update/{id}',[CommentaireController::class,'update'])->name('Commentaire.update');

//Option
Route::get('/Option/create',[OptionController::class,'create'])->name('Option.create');
Route::get('Option/index',[OptionController::class,'index'])->name('Option.index');
Route::post('Option/store',[OptionController::class,'store'])->name('Option.store');
Route::get('Option/show/{id}',[OptionController::class,'show'])->name('Option.show');
Route::get('Option/edit/{id}',[OptionController::class,'edit'])->name('Option.edit');
Route::get('Option/delete/{id}',[OptionController::class,'destroy'])->name('Option.destroy');
Route::post('Option/update/{id}',[OptionController::class,'update'])->name('Option.update');

//Categorie
Route::get('Categorie/create',[CategorieController::class,'create'])->name('Categorie.create');
Route::get('Categorie/index',[CategorieController::class,'index'])->name('Categorie.index');
Route::post('Categorie/store',[CategorieController::class,'store'])->name('Categorie.store');
Route::get('Categorie/show/{id}',[CategorieController::class,'show'])->name('Categorie.show');
Route::get('Categorie/edit/{id}',[CategorieController::class,'edit'])->name('Categorie.edit');
Route::get('Categorie/delete/{id}',[CategorieController::class,'destroy'])->name('Categorie.destroy');
Route::post('Categorie/update/{id}',[CategorieController::class,'update'])->name('Categorie.update');

//Partenaire
Route::get('Partenaire/create',[PartenaireController::class,'create'])->name('Partenaire.create');
Route::get('Partenaire/creat',[PartenaireController::class,'create'])->name('Partenaire.create');
Route::get('Partenaire/index',[PartenaireController::class,'index'])->name('Partenaire.index');
Route::post('Partenaire/store',[PartenaireController::class,'store'])->name('Partenaire.store');
Route::get('Partenaire/show/{id}',[PartenaireController::class,'show'])->name('Partenaire.show');
Route::get('Partenaire/fichier/{id}',[PartenaireController::class,'fichier'])->name('Partenaire.fichier');
Route::get('Partenaire/edit/{id}',[PartenaireController::class,'edit'])->name('Partenaire.edit');
Route::get('Partenaire/delete/{id}',[PartenaireController::class,'destroy'])->name('Partenaire.destroy');
Route::post('Partenaire/update/{id}',[PartenaireController::class,'update'])->name('Partenaire.update');

//Article
Route::get('Article/create',[ArticleController::class,'create'])->name('Article.create');
Route::get('Article/index',[ArticleController::class,'index'])->name('Article.index');
Route::post('Article/store',[ArticleController::class,'store'])->name('Article.store');
Route::get('Article/show/{id}',[ArticleController::class,'show'])->name('Article.show');
Route::get('Article/edit/{id}',[ArticleController::class,'edit'])->name('Article.edit');
Route::get('Article/fichier/{id}',[ArticleController::class,'fichier'])->name('Article.fichier');
Route::get('Article/delete/{id}',[ArticleController::class,'destroy'])->name('Article.destroy');
Route::post('Article/update/{id}',[ArticleController::class,'update'])->name('Article.update');
Route::get('Article/liste',[ArticleController::class,'liste'])->name('Article.liste');



    
});

require __DIR__.'/auth.php';



Route::get('/', function () {
    $annonces = Annonce::all();
    $as = Annonce::count();
    $partenaires = Partenaire::all();
    $c = Partenaire::count();
    $services = Service::all();
    return view('Page.index',[
        'services' => $services,
        'partenaires' => $partenaires,
        'c' => $c,
        'annonces' => $annonces,
        'as' =>   $as,
    ]);
})->name('index');




Route::get(crypt('/about','$5$128$'), function () {
    $employes = Employe::all();
    $partenaires = Partenaire::all();
    $c = Partenaire::count();
    $services = Service::all();
    return view('Page.about',[
        'services' => $services,
        'partenaires' => $partenaires,
        'c' => $c,
        'employes' => $employes
    ]   );
})->name('about');

Route::get('/annonce/{id}', function (Request $request,int $id) {
    $partenaires = Partenaire::all();
    $c = Partenaire::count();
    $n = Categorie::find($id);
    $b = Categorie::all();
    $annonce = new Annonce();
    $categories = Categorie::all();
    $services = Service::all();
    $as = Annonce::orderBy('created_at', 'desc')->limit(4)->get();
    // orderBy('created_at', 'desc')->limit(4)->get();

   
    if ($id == 0) {
         $annonces = Annonce::orderBy('created_at', 'desc')->limit(4)->get();
         return view('Page.annonce',[
             'n' => $n,
             'services' => $services,
             'annonces' => $annonces,
             'categories' => $categories,
             'as' => $as,
             'partenaires' => $partenaires,
             'c' => $c,
         ]);
        }
    for ($i=1; $i <=Categorie::count() ; $i++) { 
        if ($id == $i){
            $annonces = Annonce::all()
            ->where('id_categorie',$id);
    
            return view('Page.annonce',[
                'n' => $n,
                'services' => $services,
                'annonces' => $annonces,
                'categories' => $categories,
                'as' => $as,
                'partenaires' => $partenaires,
                'c' => $c,
            ]);
         }
    }
    
    // if ($n == '2') {
    //     $annonces = Annonce::all()->where(['id_categorie'=>$n]);
    // }
   
})->name('annonce');

Route::get(crypt('/contact','$5$128$'), function () {
    $partenaires = Partenaire::all();
    $c = Partenaire::count();
    $services = Service::all();
    return view('Page.contact',[
        'services' => $services,
        'partenaires' => $partenaires,
        'c' => $c,
    ]   );
})->name('contact');

Route::get(crypt('/boutique','$5$128$'), function () {
    $informatiques = Article::all()->where('categorie','Equipements informatique');
    $produits = Article::all()->where('categorie','Equipements de bureau');
    $autres = Article::all()->where('categorie','Autres');
    $partenaires = Partenaire::all();
    $c = Partenaire::count();
    $services = Service::all();
    return view('Page.boutique',[
        'services' => $services,
        'partenaires' => $partenaires,
        'c' => $c,
        'informatiques' => $informatiques,
        'produits' => $produits,
        'autres' => $autres,
    ]   );
})->name('boutique');

Route::get(crypt('/portfolio','$5$128$'), function () {
    $partenaires = Partenaire::all();
    $c = Partenaire::count();
    $services = Service::all();
    $realisations = Realisation::all();
    return view('Page.portfolio',[
        'services' => $services,
        'realisations' => $realisations,
        'partenaires' => $partenaires,
        'c' => $c,
    ]);
})->name('portfolio');

Route::get(crypt('/services','$5$128$'), function () {
    $partenaires = Partenaire::all();
    $c = Partenaire::count();
    $services = Service::all();
    return view('Page.services',[
        'services' => $services,
        'partenaires' => $partenaires,
        'c' => $c,
    ]);
})->name('services');

Route::get(crypt( '/team','$5$128$'), function () {
    $employes = Employe::all();
    $partenaires = Partenaire::all();
    $c = Partenaire::count();
    $services = Service::all();
    return view('Page.team',[
        'services' => $services,
        'partenaires' => $partenaires,
        'c' => $c,
        'employes' => $employes
        ]);
})->name('team');



Route::get('/Recrutement/create',[RecrutementController::class,'create'])->name('Recrutement.create');

Route::get('Realisation/detail/{id}',[RealisationController::class,'detail'])->name('Realisation.detail');

Route::get('Annonce/detail/{id}',[AnnonceController::class,'detail'])->name('Annonce.detail');

Route::get('Article/detail/{id}',[ArticleController::class,'detail'])->name('Article.detail');

Route::get('Service/show/{id}',[ServiceController::class,'show'])->name('Service.show');


//Message
Route::get('Message/create',[MessageController::class,'create'])->name('Message.create');
Route::match(array('GET','POST'),'Message/index',[MessageController::class,'index'])->name('Message.index');
//Route::post('Message/index',[MessageController::class,'index'])->name('Message.index');
Route::post('Message/store',[MessageController::class,'store'])->name('Message.store');
Route::get('Message/show/{id}',[MessageController::class,'show'])->name('Message.show');
Route::get('Message/edit/{id}',[MessageController::class,'edit'])->name('Message.edit');
Route::get('Message/delete/{id}',[MessageController::class,'destroy'])->name('Message.destroy');
Route::post('Message/update/{id}',[MessageController::class,'update'])->name('Message.update');




//Notification
Route::get('Notification/create',[NotificationController::class,'create'])->name('Notification.create');
Route::match(array('GET','POST'),'Notification/index',[NotificationController::class,'index'])->name('Notification.index');
Route::match(array('GET','POST'),'Notification/message_lu',[NotificationController::class,'message_lu'])->name('Notification.message_lu');
Route::match(array('GET','POST'),'Notification/message_nonlu',[NotificationController::class,'message_nonlu'])->name('Notification.message_nonlu');
//Route::post('Notification/index',[NotificationController::class,'index'])->name('Notification.index');
Route::post('Notification/store',[NotificationController::class,'store'])->name('Notification.store');
Route::get('Notification/show/{id}',[NotificationController::class,'show'])->name('Notification.show');
Route::get('Notification/nonlu/{id}',[NotificationController::class,'nonlu'])->name('Notification.nonlu');
Route::get('Notification/edit/{id}',[NotificationController::class,'edit'])->name('Notification.edit');
Route::get('Notification/delete/{id}',[NotificationController::class,'destroy'])->name('Notification.destroy');
Route::post('Notification/update/{id}',[NotificationController::class,'update'])->name('Notification.update');