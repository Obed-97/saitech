<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmploiController;
use App\Http\Controllers\HistoriqueController;
use App\Http\Controllers\StageController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FAQController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Type_serviceController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\MessagesController;
use App\Http\Controllers\Admin\Category_emploiController;
use App\Http\Controllers\Admin\EmploisController;
use App\Http\Controllers\Admin\CandidatureController;
use App\Http\Controllers\Admin\Category_projetController;
use App\Http\Controllers\Admin\ProjetsController;
use App\Http\Controllers\Admin\PersonnelController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\AboutsController;


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


Route::resources([

    '/' => HomeController::class,
    'about' => AboutController::class,
    'contact' => ContactController::class,
    'emploi' => EmploiController::class,
    'stage' => StageController::class,
    'service' => ServiceController::class,
    'projet' => ProjectController::class,

    

   
]);


Route::group(['middleware'=>['auth']], function(){

    Route::resources([
        'saitech-group' => DashboardController::class,
        'type-service' => Type_serviceController::class,
        'services' => ServicesController::class,
        'section' => SectionController::class,
        'messages' => MessagesController::class,
        'category_emplois' => Category_emploiController::class,
        'emplois' => EmploisController::class,
        'candidatures' => CandidatureController::class,
        'category_projet' => Category_projetController::class,
        'projets' => ProjetsController::class,
        'users' => PersonnelController::class,
        'profile' => ProfileController::class,
        'role' => RoleController::class,
        'permission' => PermissionController::class,
        'abouts' => AboutsController::class,
        
    ]);

    Route::get('/ouvrir/cv/{pdf}', [CandidatureController::class, 'cv'])->name('cv');
    Route::get('/ouvrir/lettre/{pdf}', [CandidatureController::class, 'lettre'])->name('lettre');
    Route::put('/valide/{id}', [CandidatureController::class, 'valide'])->name('candidature.valide');
    Route::put('/rejete/{id}', [CandidatureController::class, 'rejete'])->name('candidature.rejete');

    Route::put('/lu/{id}', [MessagesController::class, 'lu'])->name('contact.lu');
    Route::get('/message/lu', [MessagesController::class, 'lire'])->name('messages.lu');
    Route::get('/message/nonlu', [MessagesController::class, 'nonlu'])->name('messages.nonlu');

    Route::get('/user/password', [ProfileController::class, 'password'])->name('password.index');
    Route::post('/user/password/changer', [ProfileController::class, 'password_store'])->name('password.store');

});

require __DIR__.'/auth.php';