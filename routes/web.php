<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GlobalController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home.index');
});

Route::get('home',[HomeController::class, 'home'])->name('home.index');
Route::get('department',[HomeController::class, 'department'])->name('home.department');
Route::get('courses',[HomeController::class, 'courses'])->name('home.courses');


Route::get('univ-info', function() {
    $universityInfo = [
            'name' => 'West Yangon Technological University',
            'motto' => 'Innovation Through Technology',
            'founded' => 1999,
            'location' => 'Yangon, Myanmar',
            'website' => 'https://www.wytu.edu.mm',
            'students' => 25000,
            'faculty' => 200,
            'logo' => 'images/logo.png',
            'accreditations' => ['MOE Accredited', 'ASEAN University Network'],
            'departments' => [
                'Civil',
                'CEIT',
                'Electronics',
                'Electrical Power',
                'Architecture',
                'Biotechnology',
                'Textile',
                'Mechanical',
                'Chemical'
            ]
        ];
    return view('home.univ-info', compact('universityInfo'));
})->name('home.univ-info');


Route::get('contact',[HomeController::class, 'contact'])->name('home.contact');

//Global admin
Route::get('admin', [GlobalController::class, 'dashboard'])->name('globals.index');
Route::get('create', [GlobalController::class, 'create'])->name('globals.create');
Route::get('list', [GlobalController::class, 'list'])->name('globals.list');



