<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommunityController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('home_index');
});*/


Route::get('/',[HomeController::class,'homepage'])->name("homepage");
Route::get('about_us',[HomeController::class,'about_us'])->name("about_us");

Route::get('all_communities',[CommunityController::class,'all_communities'])->name("all_communities");
Route::get('single_community',[CommunityController::class,'single_community'])->name("single_community");



Route::get('/community/{community_name}', [CommunityController::class,'community_detail'])->name('communities');



Route::get('contact_us',[HomeController::class,'contact_us'])->name("contact_us");


Route::get('/app', function () {
    return view('layouts.app');
});


Route::middleware(['auth', 'checksuperadmin'])->group(function () {
    Route::prefix('/admin')->group(function () {
        Route::get('/dashboard', App\Http\Livewire\Admins\Dashboard::class)->name('admin_dashboard');
        Route::get('settings', App\Http\Livewire\Admins\Settings::class)->name('admin_settings');
        Route::get('communities', App\Http\Livewire\Admins\Community::class)->name('admin_communities');
       // Route::get('properties', App\Http\Livewire\Admins\Property::class)->name('admin_properties');

        
    });
});






Auth::routes();

