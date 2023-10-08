<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\CSVController;
use App\Http\Controllers\AssignRolesController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware(['auth','roleID:1'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/swe_review', [AdminController::class, 'showForm'])->name('admin.show_form');
    Route::get('/admin/swe_review', [AdminController::class, 'processForm'])->name('admin.processForm');
    Route::get('/admin/upload_csv', [CSVController::class, 'index'])->name('admin.upload_csv');
    Route::post('/admin/upload_csv', [CSVController::class, 'uploadCSV'])->name('admin.uploadCSV');
    Route::get('/admin/view_tutors', [CSVController::class, 'viewTutors'])->name('admin.view_tutors');
    Route::get('/admin/view_modules', [CSVController::class, 'viewModules'])->name('admin.view_modules');

    Route::get('/admin/create_modules', [EditController::class, 'createModule'])->name('admin.create_modules');
    Route::post('/admin/create_modules', [EditController::class, 'storeModule'])->name('admin.store_modules');
    Route::get('/admin/edit_modules/{modules}', [EditController::class, 'editModule'])->name('admin.edit_modules');
    Route::put('/admin/edit_modules/{modules}', [EditController::class, 'updateModule'])->name('admin.update_modules');
    Route::delete('/admin/delete_modules/{modules}', [EditController::class, 'deleteModule'])->name('admin.delete_modules');


    Route::get('/admin/module_information/{module}', [ModuleController::class, 'showForm'])
    ->name('admin.module_information.show');

Route::put('/admin/module_information/{module}', [ModuleController::class, 'updateModule'])
    ->name('admin.module_information.update');


    Route::get('/admin/assign_roles', 'AssignRolesController@showAssignRolesForm')->name('admin.assign_roles');
    Route::post('/admin/assign_roles', [AssignRolesController::class, 'assignRoles'])->name('admin.assign_roles.store');
    Route::get('/admin/get_tutors/{assessmentId}', 'AssignRolesController@getTutorsForAssessment');
    

}); 







