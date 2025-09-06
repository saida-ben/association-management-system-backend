<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UseController;
use App\Http\Controllers\BenefController;
use App\Http\Controllers\ChildController;
use App\Http\Controllers\ParcoursController;
use App\Http\Controllers\CertiflogController;
use App\Http\Controllers\ExonFrController;
use App\Http\Controllers\TuteurController;
use App\Http\Controllers\AptController;
use App\Http\Controllers\EtatController;
use App\Http\Controllers\EngagController;
use App\Http\Controllers\BesoinController;
use App\Http\Controllers\DossierMedicalController;
use App\Http\Controllers\EnqController;
use App\Http\Controllers\DemandController;
use App\Http\Controllers\EnvoyDemandController;
use App\Http\Controllers\FreresController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\RegistreController;
use App\Http\Controllers\RapportController;
use App\Http\Controllers\SearchController;

use App\Http\Controllers\AcceptController;
use App\Http\Controllers\RefusController;








/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::put('/login',[App\Http\Controllers\UseController::class, 'login']);
Route::post('/benef',[App\Http\Controllers\BenefController::class, 'benef']);

Route::get('/search',[App\Http\Controllers\SearchController::class, 'search']);

Route::post('/child',[App\Http\Controllers\ChildController::class, 'child']);
Route::get('/in',[App\Http\Controllers\ChildController::class, 'in']);
Route::get('/affich',[App\Http\Controllers\TuteurController::class, 'affich']);
Route::post('/save',[App\Http\Controllers\ParcoursController::class, 'save']);
Route::post('/Exon',[App\Http\Controllers\ExonFrController::class, 'Exon']);
Route::get('/affExon',[App\Http\Controllers\ExonFrController::class, 'affExon']);


Route::post('/log',[App\Http\Controllers\CertiflogController::class, 'log']);
Route::get('/c',[App\Http\Controllers\CertiflogController::class, 'c']);


Route::post('/Apt',[App\Http\Controllers\AptController::class, 'Apt']);
Route::get('/inde',[App\Http\Controllers\ParcoursController::class, 'inde']);
Route::post('/Etat',[App\Http\Controllers\EtatController::class, 'Etat']);
Route::get('/affEtat',[App\Http\Controllers\EtatController::class, 'affEtat']);



Route::get('/c',[App\Http\Controllers\CertiflogController::class, 'c']);
Route::get('/index',[App\Http\Controllers\BenefController::class, 'index']);
Route::post('/vi',[App\Http\Controllers\ViController::class, 'vi']);
Route::get('/affvi',[App\Http\Controllers\ViController::class, 'affvi']);


Route::post('/Engag',[App\Http\Controllers\EngagController::class, 'Engag']);
Route::get('/affEngag',[App\Http\Controllers\EngagController::class, 'affEngag']);


Route::post('/besoin',[App\Http\Controllers\BesoinController::class, 'besoin']);
Route::get('/affichbesoin',[App\Http\Controllers\BesoinController::class, 'affichbesoin']);


Route::post('/med',[App\Http\Controllers\DossierMedicalController::class, 'Medic']);
Route::get('/affMedical',[App\Http\Controllers\DossierMedicalController::class, 'affMedical']);


Route::post('/logout',[App\Http\Controllers\UseController::class, 'logout']);

Route::get('/affichageDemande/{id}',[App\Http\Controllers\DemandController::class, 'affichageDemande']);

Route::post('/Enq',[App\Http\Controllers\EnqController::class, 'Enq']);
Route::get('/affEnq',[App\Http\Controllers\EnqController::class, 'affEnq']);
Route::get('/affichApt',[App\Http\Controllers\AptController::class, 'affichApt']);


Route::post('/demande',[App\Http\Controllers\DemandController::class, 'Demand']);
Route::get('/affd',[App\Http\Controllers\DemandController::class, 'affd']);
Route::post('/DemandEnv',[App\Http\Controllers\EnvoyDemandController::class, 'DemandEnv']);
Route::get('/affichEnvD',[App\Http\Controllers\EnvoyDemandController::class, 'affichEnvD']);
Route::post('/enregistrer',[App\Http\Controllers\FreresController::class, 'enregistrer']);
Route::get('/affichFreres',[App\Http\Controllers\FreresController::class, 'modifier']);
Route::delete('/supprimer/{code}',[App\Http\Controllers\FreresController::class, 'destroy']);
Route::put('/updateF/{code}',[App\Http\Controllers\FreresController::class, 'updateF']);
Route::get('/affFrere',[App\Http\Controllers\FreresController::class, 'affFrere']);



//Route::get('/delete/{id}',[App\Http\Controllers\BenefController::class, 'delete']);
Route::put('/update/{id}',[App\Http\Controllers\BenefController::class, 'update']);
 
Route::delete('/delete/{id}',[App\Http\Controllers\BenefController::class, 'destroy']);
Route::post('/check', [UseController::class, 'checkAuthentication']);
Route::get('/affichuser', [UseController::class, 'affichuser']);

Route::post('/candidat',[App\Http\Controllers\CandidatController::class, 'candidat']);
Route::get('/affcandidat',[App\Http\Controllers\CandidatController::class, 'affcandidat']);
Route::delete('/supprimerCand/{id}',[App\Http\Controllers\CandidatController::class, 'destroy']);


Route::post('/addActivite',[App\Http\Controllers\ActiviteController::class, 'addActivite']);
Route::delete('/supprimerAct/{id}',[App\Http\Controllers\ActiviteController::class, 'destroy']);
Route::put('/updatactivity/{id}',[App\Http\Controllers\ActiviteController::class, 'updatactivity']);
Route::get('/affActivite',[App\Http\Controllers\ActiviteController::class, 'affActivite']);


Route::post('/enregistrerInfraction',[App\Http\Controllers\InfractionController::class, 'enregistrerInfraction']);
Route::delete('/supprimerInf/{id}',[App\Http\Controllers\InfractionController::class, 'destroy']);
Route::put('/updatInfraction/{id}',[App\Http\Controllers\InfractionController::class, 'updatInfraction']);
Route::get('/affInfraction',[App\Http\Controllers\InfractionController::class, 'affInfraction']);


Route::post('/addAccident',[App\Http\Controllers\AccidentController::class, 'addAccident']);
Route::delete('/supprimerInc/{id}',[App\Http\Controllers\AccidentController::class, 'destroy']);
Route::put('/updatincident/{id}',[App\Http\Controllers\AccidentController::class, 'updatincident']);
Route::get('/affAccident',[App\Http\Controllers\AccidentController::class, 'affAccident']);



Route::post('/enregistrerSeance',[App\Http\Controllers\SeanceController::class, 'enregistrerSeance']);
Route::delete('/supprimerSeance/{id}',[App\Http\Controllers\SeanceController::class, 'destroy']);
Route::put('/updatSeance/{id}',[App\Http\Controllers\SeanceController::class, 'updatSeance']);
Route::get('/affSeance',[App\Http\Controllers\SeanceController::class, 'affSeance']);



Route::post('/addRegister',[App\Http\Controllers\RegistreController::class, 'addRegister']);
Route::get('/affRegister',[App\Http\Controllers\RegistreController::class, 'affRegister']);
Route::delete('/s/{id}',[App\Http\Controllers\RegistreController::class, 'destroy']);
Route::get('/searchr',[App\Http\Controllers\RegistreController::class, 'search']);


Route::post('/addScolarite',[App\Http\Controllers\ScolariteController::class, 'addScolarite']);
Route::get('/affScolarite',[App\Http\Controllers\ScolariteController::class, 'affScolarite']);

Route::post('/addRapport',[App\Http\Controllers\RapportController::class, 'addRapport']);
Route::get('/affRapport',[App\Http\Controllers\RapportController::class, 'affRapport']);

Route::post('/addSortie',[App\Http\Controllers\SortieController::class, 'addSortie']);
Route::get('/affSortie',[App\Http\Controllers\SortieController::class, 'affSortie']);


Route::post('/addaccept',[App\Http\Controllers\AcceptController::class, 'addaccept']);
Route::get('/affaccept',[App\Http\Controllers\AcceptController::class, 'affaccept']);

Route::post('/addrefus',[App\Http\Controllers\RefusController::class, 'addrefus']);
Route::get('/affrefus',[App\Http\Controllers\RefusController::class, 'affrefus']);