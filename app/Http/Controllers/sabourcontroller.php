<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sabourcontroller extends Controller
{
    
    
    public function school()
    {
        return view('school');
    }
    public function data_for_each_year($id)
    {
        $years = DB::table('years')->where('id', $id)->get();
        $courses = DB::table('materials')->where('year_id', $id)->get();
        return view('school',['courses' => $courses, 'year_id' => $id, 'name_year'=>$years] );
    }
    
   

    public function showYear($id)
    {
        $courses = DB::table('courses')->where('year_id', $id)->get();
        return view('year.show', compact('courses'));
    }

    public function showCourse($id)
    {
        $pdfs = DB::table('pdfs')->where('course_id', $id)->get()->groupBy('type');
        $course = DB::table('courses')->where('id', $id)->first();
        return view('course.show', compact('pdfs', 'course'));
    }
    public function show_dash()
    {
        return view('add-courses');
    }

   

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'year_id' => 'required|integer',
        ]);

        // Insert the data directly into the 'courses' table
        $id = DB::table('courses')->insertGetId([
            'name' => $request->input('name'),
            'year_id' => $request->input('year_id'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        // Redirect to the add-name route with a success message
        return redirect()->route('add-name', ['year_id' => $request->input('year_id')])->with('success', 'Name added successfully!');
    }
}