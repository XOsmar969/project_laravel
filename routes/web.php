<?php

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
use App\Http\Controllers\Admin\AdminStudentController;
use App\Http\Controllers\Admin\AdminGuardianController;
use App\Http\Controllers\Admin\AdminTeacherController;
use App\Http\Controllers\Admin\AdminClassroomController;
use App\Http\Controllers\Admin\AdminSubjectController;


// =====================
// RUTE UTAMA WEBSITE
// =====================
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/info', [InfoController::class, 'info'])->name('info');
Route::get('/profil', [ProfilController::class, 'profil'])->name('profil');
Route::get('/kontak', [KontakController::class, 'kontak'])->name('kontak');

Route::get('/student', [StudentController::class, 'index'])->name('student');
Route::get('/guardian', [GuardianController::class, 'index'])->name('guardian');
Route::get('/classroom', [ClassroomController::class, 'index'])->name('classroom');
Route::get('/teacher', [TeacherController::class, 'index'])->name('teacher');
Route::get('/subject', [SubjectController::class, 'index'])->name('subject');


// =====================
// RUTE ADMIN PANEL
// =====================
Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard', ['title' => 'Dashboard Admin']);
    })->name('dashboard');

    // CRUD Student
    Route::get('/student', [AdminStudentController::class, 'index'])->name('students.index');
    Route::post('/student', [AdminStudentController::class, 'store'])->name('students.store');
    Route::delete('/student/{student}', [AdminStudentController::class, 'destroy'])->name('students.destroy');
    Route::get('/student/{student}/edit', [AdminStudentController::class, 'edit'])->name('students.edit');
    Route::put('/student/{student}', [AdminStudentController::class, 'update'])->name('students.update');

    // Guardian
    Route::get('/guardian', [AdminGuardianController::class, 'index'])->name('guardian.index');
    Route::post('/guardian', [AdminGuardianController::class, 'store'])->name('guardian.store');

    // Teacher
    Route::get('/teacher', [AdminTeacherController::class, 'index'])->name('teacher.index');
    Route::post('/teacher', [AdminTeacherController::class, 'store'])->name('teacher.store');

    // Subject
    Route::get('/subject', [AdminSubjectController::class, 'index'])->name('subject.index');
    Route::get('/subject/create', [AdminSubjectController::class, 'create'])->name('subject.create');
    Route::post('/subject', [AdminSubjectController::class, 'store'])->name('subject.store');

    // Classroom
    Route::get('/classroom', [AdminClassroomController::class, 'index'])->name('classroom.index');
    Route::get('/classroom/create', [AdminClassroomController::class, 'create'])->name('classroom.create');
    Route::post('/classroom', [AdminClassroomController::class, 'store'])->name('classroom.store');
    Route::delete('/classroom/{id}', [AdminClassroomController::class, 'destroy'])->name('classroom.destroy');
});
