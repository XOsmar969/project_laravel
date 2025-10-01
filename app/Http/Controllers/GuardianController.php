<?php

namespace App\Http\Controllers;

use App\Models\Guardian;
use Illuminate\Http\Request;

class GuardianController extends Controller
{
    public function index()
    {
        $guardians = Guardian::all();
        return view('guardian', [
            'guardians' => $guardians,
            'title' => 'Guardians'
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
