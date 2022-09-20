<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all();
        return $student;
    }

    public function show($name)
    {
        $student = Student::where('name',$name)->get();
        return $student;
    }

    public function destroy($name)
    {
        Student::where('name',$name)->delete();
        return "Student Delete Succeeds";
    }

    public function store(Request $request)
    {
        Student::create([
            'name' => $request->name,
            'name' => $request->name,
            'name' => $request->name,
            'name' => $request->name,
        ]);
    }
}
