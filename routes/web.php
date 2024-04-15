<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function(){
    return view('index');
});
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/statistique', function () {
        return view('admin.chart');
    })->name('admin.chart');

    Route::get('/porte-feuillle', function () {
        return view('admin.wallet');
    })->name('admin.wallet');

    Route::get('/ajouter-agent', function () {
        return view('admin.addagent');
    })->name('admin.addagent');

    Route::get('/liste-agent', function () {
        return view('admin.listagent');
    })->name('admin.listagent');

    Route::get('/produits', function(){
        return view('admin.products');
    })->name('admin.products');

    Route::get('/consommation', function(){
        return view('admin.conso');
    })->name('admin.conso');

    Route::get('/profile', function(){
        return view('admin.profile');
    })->name('admin.profile');

    Route::get('/reglage', function(){
        return view('admin.setting');
    })->name('admin.setting');


});