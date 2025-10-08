<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;


class TeacherController extends Controller{
public function index()
    {
        $teachers = Teacher::all();
        return view('teacher', [
            'teachers' => $teachers,
            'title' => 'Teacher'
        ]);
    }
}
