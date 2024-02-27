<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/spots', [\App\Http\Controllers\HomeController::class, 'spots']);
// Route::resource('/',(\App\Http\Controllers\HomeController::class));
Route::get('/detail-spot/{slug}', [\App\Http\Controllers\HomeController::class, 'detailSpot'])->name('detail-spot');
// Route::get('navbar', function () {
//     return view('navbar');
// });
Route::get('/', [\App\Http\Controllers\HomeController::class, 'utama'])->name('utama');
Route::get('/coba', [\App\Http\Controllers\HomeController::class, 'coba']);
Route::get('/utama', [\App\Http\Controllers\HomeController::class, 'utama']);
Route::get('/frontend', [\App\Http\Controllers\HomeController::class, 'frontend']);
Route::get('/gallery', [\App\Http\Controllers\HomeController::class, 'gallery']);

Route::get('/utama', [\App\Http\Controllers\HomeController::class, 'utama']);
Route::post('/utama', [\App\Http\Controllers\HomeController::class, 'utama'])->name('send.email');
Route::post('/utama', [\App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');


Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/simple-map', [App\Http\Controllers\HomeController::class, 'simple_map'])->name('simple-map');
    Route::get('/markers', [App\Http\Controllers\HomeController::class, 'marker'])->name('markers');
    Route::get('/circle', [App\Http\Controllers\HomeController::class, 'circle'])->name('circle');
    Route::get('/polygon', [App\Http\Controllers\HomeController::class, 'polygon'])->name('polygon');
    Route::get('/polyline', [App\Http\Controllers\HomeController::class, 'polyline'])->name('polyline');
    Route::get('/rectangle', [App\Http\Controllers\HomeController::class, 'rectangle'])->name('rectangle');
    Route::get('/layer', [App\Http\Controllers\HomeController::class, 'layers'])->name('layer');
    Route::get('/layer-group', [App\Http\Controllers\HomeController::class, 'layer_group'])->name('layer-group');
    Route::get('/geojson', [App\Http\Controllers\HomeController::class, 'geojson'])->name('geojson');
    Route::get('/get-coordinate', [App\Http\Controllers\HomeController::class, 'getCoordinate'])->name('getCoordinate');

    ## Route Datatable
    Route::get('/centre-point/data', [\App\Http\Controllers\Backend\DataController::class, 'centrepoint'])->name('centre-point.data');
    Route::get('/spot/data', [\App\Http\Controllers\Backend\DataController::class, 'spot'])->name('spot.data');
    Route::get('/program/data', [\App\Http\Controllers\Backend\DataController::class, 'program'])->name('program.data');
    Route::get('/qna/data', [\App\Http\Controllers\Backend\DataController::class, 'qna'])->name('qna.data');
    Route::get('/team/data', [\App\Http\Controllers\Backend\DataController::class, 'team'])->name('team.data');
    Route::get('/partnership/data', [\App\Http\Controllers\Backend\DataController::class, 'partnership'])->name('partnership.data');

    Route::resource('centre-point', (\App\Http\Controllers\Backend\CentrePointController::class));
    Route::resource('spot', (\App\Http\Controllers\Backend\SpotController::class));

    Route::resource(('program'), (\App\Http\Controllers\ProgramController::class));
    Route::resource('qna', (\App\Http\Controllers\QnAController::class));
    Route::resource('team', (\App\Http\Controllers\TeamController::class));
    Route::resource('partnership', (\App\Http\Controllers\PartnershipController::class));
});
