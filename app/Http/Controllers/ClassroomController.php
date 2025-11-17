<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    // Untuk user biasa — hanya menampilkan data classroom
   public function index()
{
    $classroom = Classroom::all(); 
    return view('classroom', [
        'title' => 'Classroom', 
        'classroom' => $classroom
    ]);
}


    // Untuk admin — CRUD classroom
    public function adminIndex()
    {
        $classrooms = Classroom::all();

        // Pastikan view ini ada di: resources/views/admin/classroom/index.blade.php
        return view('admin.classroom.index', [ 
            'title' => 'Data Classroom (Admin)',
            'classrooms' => $classrooms
        ]);
    }
}
