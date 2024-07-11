<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MaterialController extends Controller
{
    public function index($year_id)
{
    $materials = DB::table('materials')
        ->where('year_id', $year_id)
        ->get();
        dd($materials);

    return view('materials.index', compact('materials', 'year_id'));
}

    public function store(Request $request, $course_id)
    {
        
        DB::table('materials')->insert([
            'name' => $request->input('name'),
            'course_id' => $course_id,
            'course_pdf' => $request->file('course_pdf') ? $request->file('course_pdf')->store('pdfs') : null,
            'exercise_pdf' => $request->file('exercise_pdf') ? $request->file('exercise_pdf')->store('pdfs') : null,
            'exam_pdf' => $request->file('exam_pdf') ? $request->file('exam_pdf')->store('pdfs') : null,
        ]);

        return view('materials.index', compact( 'course_id'));
    }

    public function update(Request $request, $id)
    {
        $data = [
            'name' => $request->input('name'),
            'course_id' => $request->input('course_id'),
        ];

        if ($request->hasFile('course_pdf')) {
            $data['course_pdf'] = $request->file('course_pdf')->store('pdfs');
        }

        if ($request->hasFile('exercise_pdf')) {
            $data['exercise_pdf'] = $request->file('exercise_pdf')->store('pdfs');
        }

        if ($request->hasFile('exam_pdf')) {
            $data['exam_pdf'] = $request->file('exam_pdf')->store('pdfs');
        }

        DB::table('materials')->where('id', $id)->update($data);

        return redirect()->route('materials.index', ['year' => $data['course_id']]);
    }

    public function destroy($id)
    {
        DB::table('materials')->where('id', $id)->delete();
        return redirect()->route('materials.index');
    }
    public function show($year_id)
    {
        
        // Retrieve all courses with the given year_id using DB facade
        $courses = DB::table('materials')->where('year_id', $year_id)->get();

        // Pass the courses to the view
        return view('materials.index', ['courses' => $courses, 'year_id' => $year_id]);
    }
    public function store1(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'course_pdf' => 'required|file|mimes:pdf',
            'exercise_pdf' => 'required|file|mimes:pdf',
            'exam_pdf' => 'required|file|mimes:pdf',
            'year_id' => 'required|integer',
        ]);
    
        // Check if files are uploaded
        if ($request->hasFile('course_pdf') && $request->hasFile('exercise_pdf') && $request->hasFile('exam_pdf')) {
            // Store files and get their paths
            $coursePdfPath = $request->file('course_pdf')->store('courses');
            $exercisePdfPath = $request->file('exercise_pdf')->store('exercises');
            $examPdfPath = $request->file('exam_pdf')->store('exams');
    
            // Insert data into the database
            DB::table('materials')->insert([
                'name' => $request->input('name'),
                'course_pdf' => $coursePdfPath,
                'exercise_pdf' => $exercisePdfPath,
                'exam_pdf' => $examPdfPath,
                'year_id' => $request->input('year_id'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    
            // Redirect back to the courses page for the same year
            return redirect()->route('courses.show', ['year_id' => $request->input('year_id')]);
        } else {
            // Handle case where files are not uploaded
            return redirect()->back()->withErrors(['msg' => 'Please upload all required files.']);
        }
    }
    

    public function update1(Request $request, $id)
{
    $course = DB::table('materials')->where('id', $id)->first();
   return view('materials.edit', compact('course')); 
}
    
public function update2(Request $request, $id)
{
    $course = DB::table('materials')->where('id', $id)->first();

    // Preserve old paths if no new files are uploaded
    $coursePdfPath = $course->course_pdf;
    $exercisePdfPath = $course->exercise_pdf;
    $examPdfPath = $course->exam_pdf;

    // Update course PDF if a new file is uploaded
    if ($request->hasFile('course_pdf')) {
        $coursePdfPath = $request->file('course_pdf')->move(public_path('courses'), $request->file('course_pdf')->getClientOriginalName());
        $coursePdfPath = 'courses/' . $request->file('course_pdf')->getClientOriginalName(); // Update the path
    }

    // Update exercise PDF if a new file is uploaded
    if ($request->hasFile('exercise_pdf')) {
        $exercisePdfPath = $request->file('exercise_pdf')->move(public_path('exercises'), $request->file('exercise_pdf')->getClientOriginalName());
        $exercisePdfPath = 'exercises/' . $request->file('exercise_pdf')->getClientOriginalName(); // Update the path
    }

    // Update exam PDF if a new file is uploaded
    if ($request->hasFile('exam_pdf')) {
        $examPdfPath = $request->file('exam_pdf')->move(public_path('exams'), $request->file('exam_pdf')->getClientOriginalName());
        $examPdfPath = 'exams/' . $request->file('exam_pdf')->getClientOriginalName(); // Update the path
    }

    // Update the record in the database
    DB::table('materials')->where('id', $id)->update([
        'name' => $request->input('name'),
        'course_pdf' => $coursePdfPath,
        'exercise_pdf' => $exercisePdfPath,
        'exam_pdf' => $examPdfPath,
        'updated_at' => now(),
    ]);

    // Redirect to the courses page with a success message
    return redirect()->route('courses.show', ['year_id' => $course->year_id])->with('success', 'Course updated successfully.');
}

}
