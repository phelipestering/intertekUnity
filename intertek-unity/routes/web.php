<?php

use App\Http\Controllers\Admin\InspectorController;
use Illuminate\Support\Facades\Route;

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


// ROTA INSPETORES

Route::get('admin/inspectors',[InspectorController::class, 'index'])->name('inspectors.index');

Route::get('admin/inspectors/create',[InspectorController::class, 'create'])->name('inspectors.create');

Route::POST('admin/inspectors/', [InspectorController::class, 'store'])->name('inspectors.store');

Route::get('admin/inspectors/{name}',[InspectorController::class, 'show'])->name('inspectors.show');

Route::delete('admin/inspectors/{name}',[InspectorController::class, 'deleteInspetor'])->name('inspectors.deleteInspetor');

Route::any('admin/inspectors/search',[InspectorController::class, 'search'])->name('inspectors.search');

Route::get('admin/inspectors/{name}/edit',[InspectorController::class, 'edit'])->name('inspectors.edit');

Route::PUT('admin/inspectors/{name}',[InspectorController::class, 'update'])->name('inspectors.update');


// BREADCRUMB

Route::get('admin',[InspectorController::class, 'index'])->name('admin.index');
