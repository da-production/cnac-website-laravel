<?php

use Illuminate\Support\Facades\{Route,App,Session};
use App\Http\Controllers\{
    PostController,
    PageController,
    HomeController
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'Index'])->name('accueil');

Route::controller(PageController::class)
    ->group(function(){
        Route::get('/assurance-chomage', 'AssuranceChomage')->name('AssuranceChomage');
        Route::get('/dispositif-30-55', 'Dispositif3055')->name('Dispositif3055');
        Route::get('/Loi0621', 'Loi0621')->name('Loi0621');
        Route::get('/presentation/qui-somme-nous', 'Presentation')->name('Presentation');
        Route::get('/presentation/mot-du-directeur-generale', 'MotDG')->name('MotDG');
        Route::get('/presentation/text-reglementaires', 'TextReglementaires')->name('TextReglementaires');
        Route::get('/presentation/organisation', 'Organisation')->name('Organisation');
        Route::get('/allocataire-infos-utiles','AllocataireInfosUtiles')->name('AllocataireInfosUtiles');
        Route::get('/autre-services','AutreServices')->name('AutreServices');
        Route::get('/communique','Communique')->name('Communique');
        Route::get('/contact','Contact')->name('Contact');
        Route::get('/dossier-presse','DossierPresse')->name('DossierPresse');
        Route::get('/employeur-infos-utiles','EmployeurInfosUtiles')->name('EmployeurInfosUtiles');
        Route::get('faq','FAQ')->name('FAQ');
        Route::get('fcmg','FCMG')->name('FCMG');
        Route::get('organismes','Organismes')->name('Organismes');
        Route::get('parcours','Parcours')->name('Parcours');
        Route::get('promoteur-infos-utiles','PromoteurInfosUtiles')->name('PromoteurInfosUtiles');
        Route::get('services-en-ligne','ServicesEnLigne')->name('ServicesEnLigne');
        Route::get('sitemap','SiteMap')->name('SiteMap');
        Route::get('discours-dg','DiscoursDg')->name('DiscoursDg');
    });



Route::get('language/{locale}', function ($locale = null) {
    
    if (!in_array($locale, ['ar', 'fr'])) {
        abort(404);
    }
    Session::put('locale',$locale);
 
    return redirect()->back();
})->name('language');
