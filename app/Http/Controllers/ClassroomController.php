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


    public function adminIndex()
    {
        $classrooms = Classroom::all();
        
        return view('admin.classroom.index', [ 
            'title' => 'Data Classroom (Admin)',
            'classrooms' => $classrooms
        ]);
    }
}
