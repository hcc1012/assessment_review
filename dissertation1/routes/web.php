<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\CSVController;
use App\Http\Controllers\AssignRolesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\ReviewController;


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
    Route::get('/admin/upload_csv', [CSVController::class, 'index'])->name('admin.upload_csv');
    Route::post('/admin/upload_csv', [CSVController::class, 'uploadCSV'])->name('admin.uploadCSV');
    Route::get('/admin/view_tutors', [CSVController::class, 'viewTutors'])->name('admin.view_tutors');
    Route::get('/admin/view_modules', [CSVController::class, 'viewModules'])->name('admin.view_modules');

    Route::get('/admin/create_modules', [EditController::class, 'createModule'])->name('admin.create_modules');
    Route::post('/admin/create_modules', [EditController::class, 'storeModule'])->name('admin.store_modules');
    Route::get('/admin/edit_modules/{modules}', [EditController::class, 'editModule'])->name('admin.edit_modules');
    Route::put('/admin/edit_modules/{modules}', [EditController::class, 'updateModule'])->name('admin.update_modules');
    Route::delete('/admin/delete_modules/{modules}', [EditController::class, 'deleteModule'])->name('admin.delete_modules');


    Route::get('/admin/module_information/{projectId}', [ModuleController::class, 'showForm'])
    ->name('admin.module_information.show');

Route::put('/admin/module_information/{projectId}', [ModuleController::class, 'updateModule'])
    ->name('admin.module_information.update');


    Route::get('/admin/assessment_information', [AssessmentController::class, 'showForm'])->name('admin.assessment_information.showForm');
    Route::post('/admin/assessment_information', [AssessmentController::class, 'store'])->name('admin.assessment_information.store');
    

    Route::get('/admin/review_information', [ReviewController::class, 'showForm'])->name('admin.review_information.showForm');
    Route::post('/admin/review_information', [ReviewController::class, 'store'])->name('admin.review_information.store');
    
    Route::get('/admin/assign_roles', [AssignRolesController::class, 'showForm'])->name('admin.assign_roles');
    Route::post('/admin/assign_roles', [AssignRolesController::class, 'submitForm'])->name('admin.assign_roles.submit');
    
    

}); 


Route::middleware(['auth','roleID:2'])->group(function(){
    Route::get('/user/dashboard1', [UserController::class, 'UserDashboard'])->name('user.dashboard1');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
}); 


Route::middleware(['auth','roleID:3'])->group(function(){
    Route::get('/user/dashboard', [UserController::class, 'UserDashboard'])->name('user.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

}); 


Route::middleware(['auth','roleID:4'])->group(function(){
    Route::get('/user/dashboard', [UserController::class, 'UserDashboard'])->name('user.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

}); 


Route::middleware(['auth','roleID:5'])->group(function(){
    Route::get('/user/dashboard', [UserController::class, 'UserDashboard'])->name('user.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

}); 





