<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return "Selamat Datang di Website Saya";
// });

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('beranda');
// });



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;




// Rute untuk Halaman Utama
Route::get('/', [HomeController::class, 'index'])->name('home');


// Rute untuk Halaman Beranda (jika diperlukan)
Route::get('/info', [InfoController::class, 'info'])->name('info');

// Rute untuk Halaman Profil
Route::get('/profil', [ProfilController::class, 'profil'])->name('profil');

// Rute untuk Halaman Kontak
Route::get('/kontak', [KontakController::class, 'kontak'])->name('kontak');

Route::get('/student', [StudentController::class, 'index'])->name('student');

Route::get('/guardian', [GuardianController::class, 'index'])->name('guardian');

Route::get('/classroom', [ClassroomController::class, 'index'])->name('classroom');

Route::get('/teacher', [TeacherController::class, 'index'])->name('teacher');

Route::get('/subject', [SubjectController::class, 'index'])->name('subject');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/students', [StudentController::class, 'index'])->name('admin.students');
    Route::get('/subject', [SubjectController::class, 'index'])->name('admin.subject');
    Route::get('/info', [InfoController::class, 'index'])->name('admin.info');
});