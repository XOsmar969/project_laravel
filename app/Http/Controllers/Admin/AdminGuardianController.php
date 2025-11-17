<?php

namespace App\Http\Controllers\Admin;

use App\Models\Guardian;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminGuardianController extends Controller
{
    public function index()
    {
        return view('admin.guardian.index', [
            'title' => 'Data Guardians',
            'guardians' => Guardian::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'job' => 'required|min:3|max:255',
            'email' => 'required|email|unique:guardians,email',
            'address' => 'required|min:5',
        ]);

        Guardian::create($request->all());

        return redirect('/admin/guardian')->with('success', 'Data wali berhasil ditambahkan!');
    }
}
