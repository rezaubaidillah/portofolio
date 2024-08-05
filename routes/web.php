<?php

use App\Models\Certification;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CertificationController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/certifications', function () {
    $certifications = Certification::filter()->paginate(5);


    return view('certifications', ['title' => 'Certifications', 'certifications' => $certifications]);
});
Route::get('/dashboard', function () {
    return view('dashboard', ['certifications' => Certification::filter()->latest()->paginate(20)]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboardProjects', function () {
    return view('dashboardProjects');
})->middleware(['auth', 'verified'])->name('dashboardProjects');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/projects', function () {
    return view('projects', ['title' => 'Projects']);
});

// Show the form for creating a new certification
Route::get('/certifications/create', [CertificationController::class, 'create'])->name('certifications.create');

// Store a newly created certification
Route::post('/certifications', [CertificationController::class, 'store'])->name('certifications.store');
// Store a update  certification
Route::put('/certifications/update', [CertificationController::class, 'update'])->name('certifications.update');
Route::delete('/certifications/{id}', [CertificationController::class, 'destroy'])->name('certifications.destroy');
Route::get('/certifications/{id}', [CertificationController::class, 'show']);
Route::get('/certifications/search', [CertificationController::class, 'search'])->name('certifications.search');
