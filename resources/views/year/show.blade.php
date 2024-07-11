<!-- resources/views/year/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center mt-5">
        <h1>Select a Course</h1>
        <div class="list-group mt-4">
            @foreach($courses as $course)
                <a href="{{ route('course.show', $course->id) }}" class="list-group-item list-group-item-action">
                    {{ $course->name }}
                </a>
            @endforeach
        </div>
    </div>
</body>
</html>
