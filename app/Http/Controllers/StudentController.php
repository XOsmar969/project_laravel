<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Classroom;

class StudentController extends Controller
{
    /**
     * Halaman utama Student (Frontend)
     */
    public function index()
    {
        $students = Student::with('classroom')->get();

        return view('student', [
            'title' => 'Student',
            'students' => $students,
            'classrooms' => Classroom::all(),
        ]);
    }
}
