<?php
namespace App\Http\Controllers\Admin;

use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AdminSubjectController extends Controller
{
    public function index()
    {
        return view('admin.subject.index', [
            'title' => 'Data Subject',
            'subjects' => Subject::all()
        ]);
    }

    public function create()
    {
        return view('admin.subject.create', [
            'title' => 'Tambah Subject'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:255'
        ]);

        Subject::create([
            'name' => $request->name
        ]);

        return redirect('/admin/subject')->with('success', 'Subject berhasil ditambahkan!');
    }
}
