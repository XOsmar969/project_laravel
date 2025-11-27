<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guardian;

class AdminGuardianController extends Controller
{
    public function index()
    {
        $guardians = Guardian::all();


        return view('admin.guardian.index', [
            'title' => 'Data Guardian',
            'guardians' => $guardians
        ]);
    }

    public function create()
    {
        return view('admin.guardian.create', [
            'title' => 'Tambah Guardian'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'job'   => 'required|string|max:20',
            'email'   => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
        ]);

        Guardian::create($validated);

        return redirect()->route('admin.guardian.index')
            ->with('success', 'Guardian berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $guardian = Guardian::findOrFail($id);

        return view('admin.guardian.edit', [
            'title'    => 'Edit Guardian',
            'guardian' => $guardian
        ]);
    }

    public function update(Request $request, $id)
    {
        $guardian = Guardian::findOrFail($id);

        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'job'   => 'required|string|max:20',
            'email' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
        ]);

        $guardian->update($validated);

        return redirect()->route('admin.guardian.index')
            ->with('success', 'Guardian berhasil diupdate!');
    }

    public function destroy($id)
    {
        $guardian = Guardian::findOrFail($id);
        $guardian->delete();

        return redirect()->route('admin.guardian.index')
            ->with('success', 'Guardian berhasil dihapus!');
    }
}
