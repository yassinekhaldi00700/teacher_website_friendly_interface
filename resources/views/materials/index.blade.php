<!-- resources/views/courses/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Courses</title>
</head>
<body>
    <h1>Courses for Year {{ $year_id }}</h1>

    <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Course Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="course_pdf">Course PDF:</label>
            <input type="file" id="course_pdf" name="course_pdf" required>
        </div>
        <div>
            <label for="exercise_pdf">Exercise PDF:</label>
            <input type="file" id="exercise_pdf" name="exercise_pdf" required>
        </div>
        <div>
            <label for="exam_pdf">Exam PDF:</label>
            <input type="file" id="exam_pdf" name="exam_pdf" required>
        </div>
        <input type="hidden" name="year_id" value="{{ $year_id }}">
        <button type="submit">Add Course</button>
    </form>

    @if($courses->isEmpty())
        <p>No courses found for this year.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Course PDF</th>
                    <th>Exercise PDF</th>
                    <th>Exam PDF</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th> <!-- Add Actions column header -->
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->name }}</td>
                        <td><a href="{{ $course->course_pdf }}">Download</a></td>
                        <td><a href="{{ $course->exercise_pdf }}">Download</a></td>
                        <td><a href="{{ $course->exam_pdf }}">Download</a></td>
                        <td>{{ $course->created_at }}</td>
                        <td>{{ $course->updated_at }}</td>
                        <td>
                            
                            <a href="{{ route('courses.edit', ['id' => $course->id]) }}">Update</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
