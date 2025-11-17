<?php
namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        return view('subject', [
            'title' => 'Subject',
            'subject' => Subject::all()
        ]);
    }

    public function adminIndex()
    {
        return view('admin.subject.index', [
            'title' => 'Data mata pelajaran (Admin)',
            'subjects' => Subject::all()
        ]);
    }
}
