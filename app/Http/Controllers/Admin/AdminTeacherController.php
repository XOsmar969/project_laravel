<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Subject;

class AdminTeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        $subjects = Subject::all();

        return view('admin.teacher.index', [
            'title' => 'Data Teacher',
            'teachers' => $teachers,
            'subjects' => $subjects
        ]);
    }

    public function create()
    {
        $subjects = Subject::all();
        return view('admin.teacher.create', [
            'title' => 'Tambah Teacher',
            'subjects' => $subjects
            
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'subject_id' => 'required|exists:subjects,id|unique:teachers,subject_id',
            'email'   => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'phone'   => 'required|string|max:20',
        ]);

        Teacher::create($validated);

        return redirect()->route('admin.teacher.index')
            ->with('success', 'Teacher berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);

        return view('admin.teacher.edit', [
            'title' => 'Edit Teacher',
            'teacher' => $teacher
        ]);
    }

    public function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);

       $validated = $request->validate([
    'name'       => 'required|string|max:255',
    'subject_id' => 'required|exists:subjects,id|unique:teachers,subject_id,' . $teacher->id,
    'phone'      => 'required|string|max:20',
    'address'    => 'nullable|string|max:255',
]);


        $teacher->update($validated);

        return redirect()->route('admin.teacher.index')
            ->with('success', 'Teacher berhasil diupdate!');
    }

    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return redirect()->route('admin.teacher.index')
            ->with('success', 'Teacher berhasil dihapus!');
    }
}
