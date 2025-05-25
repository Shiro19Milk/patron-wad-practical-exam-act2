<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Services\StudentService;

class StudentController extends Controller
{
    protected $studentService;

    public function __construct(StudentService $studentService)
    {
        $this->studentService = $studentService;
    }

    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'course' => 'required|string|max:100',
        ]);

        $this->studentService->store($data);

        return redirect()->route('students.index')->with('success', 'Student added!');
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'course' => 'required|string|max:100',
        ]);

        $this->studentService->update($student, $data);

        return redirect()->route('students.index')->with('success', 'Student updated!');
    }
}