<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contact', compact('contacts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string'
        ]);

        Contact::create($request->all());

        return redirect()->route('contact')->with('success', 'Contact submitted successfully.');
    }
    public function getCoursesByYear(Request $request)
    {
        $year_id = $request->input('year_id');
        $courses = DB::table('courses')->where('year_id', $year_id)->get();
        return view('courses.index', compact('courses'));
    }

    
    
    public function show(Request $request, $id)
    {
        // Fetch the course details by ID
        $course = DB::table('courses')->where('id', $id)->first();
        
        // Fetch materials for the course
        $materials = DB::table('materials')->where('course_id', $id)->get();
        
        return view('materials.index', compact('course', 'materials', 'id'));
    }

}
