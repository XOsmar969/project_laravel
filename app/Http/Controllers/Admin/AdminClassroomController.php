<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classroom;

class AdminClassroomController extends Controller
{
    // Halaman daftar classroom
    public function index()
    {
        $classrooms = Classroom::with('students')->get();

        return view('admin.classroom.index', [
            'title' => 'Data Classroom',
            'classrooms' => $classrooms
        ]);
    }

    // Halaman form tambah classroom
    public function create()
    {
        return view('admin.classroom.create', [
            'title' => 'Tambah Classroom'
        ]);
    }

    // Proses simpan classroom baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:classrooms,name'
        ]);

        Classroom::create($validated);

        return redirect()->route('admin.classroom.index')
            ->with('success', 'Classroom berhasil ditambahkan!');
    }

    // Hapus classroom
    public function destroy($id)
    {
        $classroom = Classroom::findOrFail($id);
        $classroom->delete();

        return redirect()->route('admin.classroom.index')
            ->with('success', 'Classroom berhasil dihapus!');
    }
}
