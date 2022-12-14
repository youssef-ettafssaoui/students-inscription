<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EtablissementController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\GerantController;
use App\Http\Controllers\GerantRegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteSettingController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('home');
});

Route::view('gerant/register', 'auth.gerant-register')->name('gerant.register');

Route::post('gerant/register', [GerantRegisterController::class, 'gerantRegister'])->name('ger.register');

// SECTION DES FORMATIONS :
Route::get('/formations/allformations', [FormationController::class, 'allFormations'])->name('allformations');

Route::get('/', [FormationController::class, 'index']);

// SECTION DES GERANTS :
Route::get('/gerant/{id}/{gerant}', [GerantController::class, 'index'])->name('gerant.index');

Route::get('gerant/create', [GerantController::class, 'create'])->name('gerant.view');

Route::post('gerant/create', [GerantController::class, 'store'])->name('gerant.store');

Route::post('gerant/logo', [GerantController::class, 'gerantLogo'])->name('gerant.logo');

Route::get('/gerants', [GerantController::class, 'gerant'])->name('gerant');

// CATEGORIES :
Route::get('/category/{id}/formations', [CategoryController::class, 'index'])->name('category.index');

// SECTION DES ETUDIANTS :
Route::get('/saveFormations', [HomeController::class, 'saveFormations'])->name('saveFormations');

Route::get('user/profile', [UserController::class, 'index'])->name('user.profile');

Route::post('user/profile/create', [UserController::class, 'store'])->name('profile.create');

Route::post('user/resume', [UserController::class, 'resume'])->name('resume');

Route::post('user/avatar', [UserController::class, 'avatar'])->name('avatar');

Route::get('/dashboard', function () {
    return view('dashboard ');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/formations/{id}/{formation}', [FormationController::class, 'show'])->name('formations.show');

Route::get('/formations/create', [FormationController::class, 'create'])->name('formation.create');

Route::post('/formations/create', [FormationController::class, 'store'])->name('formation.store');

Route::get('/formations/{id}/edit', [FormationController::class, 'edit'])->name('formation.edit');

Route::post('/formations/{id}/edit', [FormationController::class, 'update'])->name('formation.update');

Route::get('/formations/ma-formation', [FormationController::class, 'maformation'])->name('ma.formation');

Route::get('/formations/applications', [FormationController::class, 'applicant'])->name('applicant');

Route::post('/applications/{id}', [FormationController::class, 'apply'])->name('apply');

//Enregistrer les Emplois

Route::post('/save/{id}', [FavouriteController::class, 'saveFormation']);

Route::post('/unsave/{id}', [FavouriteController::class, 'unSaveFormation']);


Route::resource('categorie', CategorieController::class);

Route::resource('etablissement', EtablissementController::class);

Route::get('/etablissements', [EtablissementController::class, 'etablissement'])->name('etablissement');

Route::get('/posts', [DashboardController::class, 'index'])->name('post.index');

Route::get('/posts/create', [DashboardController::class, 'create'])->name('post.create');

Route::post('/posts/create', [DashboardController::class, 'store'])->name('post.store');

Route::post('/posts/destroy', [DashboardController::class, 'destroy'])->name('post.delete');

Route::get('/posts/{id}/edit', [DashboardController::class, 'edit'])->name('post.edit');

Route::post('/posts/{id}/update', [DashboardController::class, 'update'])->name('post.update');

Route::get('/posts/trash', [DashboardController::class, 'trash'])->name(('post.trash'));

Route::get('/posts/{id}/trash', [DashboardController::class, 'restore'])->name('post.restore');

Route::get('/posts/{id}/toggle', [DashboardController::class, 'toggle'])->name('post.toggle');

Route::get('/posts/{id}/{slug}', [DashboardController::class, 'show'])->name('post.show');

Route::get('/dashboard/formations', [DashboardController::class, 'getAllFormations'])->name('getAllFormations');

Route::get('/dashboard/{id}/formations', [DashboardController::class, 'changeFormationStatus'])->name('formation.status');

// Admin Site Setting Routes :
Route::get('/site', [SiteSettingController::class, 'SiteSetting'])->name('site.setting');
Route::post('/site/update', [SiteSettingController::class, 'SiteSettingUpdate'])->name('update.sitesetting');
Route::get('/seo', [SiteSettingController::class, 'SeoSetting'])->name('seo.setting');
Route::post('/seo/update', [SiteSettingController::class, 'SeoSettingUpdate'])->name('update.seosetting');