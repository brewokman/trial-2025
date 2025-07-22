<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all(); // Atau pakai paginate() kalau banyak
        return view('students.index', compact('students'));
    }
}
