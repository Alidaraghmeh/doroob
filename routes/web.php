<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\admin\SectionsController;
use App\Http\Controllers\admin\ServicesController;
use App\Http\Controllers\admin\BusinessesController;
use App\Http\Controllers\admin\ProjectssController;
use App\Http\Controllers\admin\NewsController;

Route::prefix('admin')->group(function () {
    Route::get('/services', [ServicesController::class, 'index'])->name('admin.services.index');
    Route::get('/services/{section_id}/create', [ServicesController::class, 'create'])->name('admin.services.create');
    Route::post('/services', [ServicesController::class, 'store'])->name('admin.services.store');
    Route::get('/services/{id}/edit', [ServicesController::class, 'edit'])->name('admin.services.edit');
    Route::put('/services/{id}', [ServicesController::class, 'update'])->name('admin.services.update');
    Route::delete('/services/{id}', [ServicesController::class, 'destroy'])->name('admin.services.destroy');
    Route::get('/sections', [SectionsController::class, 'index'])->name('admin.sections.index');
    Route::get('/sections/create', [SectionsController::class, 'create'])->name('admin.sections.create');
    Route::post('/sections', [SectionsController::class, 'store'])->name('admin.sections.store');
    Route::get('/sections/{id}/edit', [SectionsController::class, 'edit'])->name('admin.sections.edit');
    Route::put('/sections/{id}', [SectionsController::class, 'update'])->name('admin.sections.update');
    Route::delete('/sections/{id}', [SectionsController::class, 'destroy'])->name('admin.sections.destroy');
    Route::get('/businesses', [BusinessesController::class, 'index'])->name('admin.businesses.index');
    Route::get('/businesses/create/{section_id}', [BusinessesController::class, 'create'])->name('admin.businesses.create');
    Route::post('/businesses', [BusinessesController::class, 'store'])->name('admin.businesses.store');
    Route::get('/businesses/{id}/edit', [BusinessesController::class, 'edit'])->name('admin.businesses.edit');
    Route::put('/businesses/{id}', [BusinessesController::class, 'update'])->name('admin.businesses.update');
    Route::delete('/businesses/{id}', [BusinessesController::class, 'destroy'])->name('admin.businesses.destroy');
    Route::get('/projects', [ProjectssController::class, 'index'])->name('admin.projects.index');
    Route::get('/projects/create/{section_id}', [ProjectssController::class, 'create'])->name('admin.projects.create');
    Route::post('/projects', [ProjectssController::class, 'store'])->name('admin.projects.store');
    Route::get('/projects/{id}/edit', [ProjectssController::class, 'edit'])->name('admin.projects.edit');
    Route::put('/projects/{id}', [ProjectssController::class, 'update'])->name('admin.projects.update');
    Route::delete('/projects/{id}', [ProjectssController::class, 'destroy'])->name('admin.projects.destroy');
    Route::get('/news', [NewsController::class, 'index'])->name('admin.news.index');
    Route::get('/news/create/{section_id}', [NewsController::class, 'create'])->name('admin.news.create');
    Route::post('/news', [NewsController::class, 'store'])->name('admin.news.store');
    Route::get('/news/{id}/edit', [NewsController::class, 'edit'])->name('admin.news.edit');
    Route::put('/news/{id}', [NewsController::class, 'update'])->name('admin.news.update');
    Route::delete('/news/{id}', [NewsController::class, 'destroy'])->name('admin.news.destroy');
    Route::get('/sections/{section_id}/services', [ServicesController::class, 'sectionServices'])->name('admin.section.services.index');
    Route::get('/sections/{section_id}/businesses', [BusinessesController::class, 'sectionBusinesses'])->name('admin.section.businesses.index');
    Route::get('/sections/{section_id}/projects', [ProjectssController::class, 'sectionProjects'])->name('admin.section.projects.index');
    Route::get('/sections/{section_id}/news', [NewsController::class, 'sectionNews'])->name('admin.section.news.index');
    Route::post('/admin/sections/update_visibility', [SectionsController::class, 'updateVisibility'])->name('admin.sections.update_visibility');
    Route::post('/admin/update-section-service-visibility/{section_id}', [ServicesController::class, 'updateSectionServiceVisibility'])
    ->name('update_section_service_visibility');
    Route::post('/admin/update-section-news-visibility/{section_id}', [ServicesController::class, 'updateSectionNewsVisibility'])
    ->name('update_section_news_visibility');
Route::post('/admin/update-section-businesses-visibility/{section_id}', [ServicesController::class, 'updateSectionBusinessesVisibility'])
    ->name('update_section_businesses_visibility');
Route::post('/admin/update-section-projects-visibility/{section_id}', [ServicesController::class, 'updateSectionProjectsVisibility'])
    ->name('update_section_projects_visibility');
} )  ;



Route::get('/', [SectionController::class, 'index'])->name('sections');

Route::get('/sections/{id}/details', [SectionsController::class, 'showSectionDetails'])->name('admin.show_details');


Route::get('/admin', function () {
    return view('admin.dashboard'); // Replace 'your-view' with the actual view name
})->name('dashboard');






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




