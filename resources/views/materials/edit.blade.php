<!DOCTYPE html>
<html>
<head>
    <title>Edit Course</title>
</head>
<body>
    <h1>Edit Course</h1>

    <form action="{{ route('courses.update', ['id' => $course->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $course->name }}" required>
    </div>

    <div>
        <label for="course_pdf">Course PDF:</label>

        @if($course->course_pdf)
            <iframe src="{{ url('storage/courses/' . basename($course->course_pdf)) }}" width="50%" height="200px">qzjndqsjdnjs</iframe><br>
        @else
            <p>No PDF available</p>
        @endif
        <input type="file" id="course_pdf" name="course_pdf">
    </div>

    <div>
        <label for="exercise_pdf">Exercise PDF:</label>
        @if($course->exercise_pdf)
            <iframe src="{{ asset('storage/' . $course->exercise_pdf) }}" width="100%" height="500px"></iframe><br>
        @else
            <p>No PDF available</p>
        @endif
        <input type="file" id="exercise_pdf" name="exercise_pdf">
    </div>

    <div>
        <label for="exam_pdf">Exam PDF:</label>
        @if($course->exam_pdf)
            <iframe src="{{ asset('storage/' . $course->exercise_pdf) }}" width="100%" height="500px"></iframe><br>
        @else
            <p>No PDF available</p>
        @endif
        <input type="file" id="exam_pdf" name="exam_pdf">
    </div>

    <button type="submit">Update</button>
</form>
</body>
</html>
