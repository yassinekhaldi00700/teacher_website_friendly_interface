<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>
<body>
    @include('header')
    
    
    <h1>{{ json_decode($name_year, true)[0]['name'] }}</h1>
    <div class="container mt-5">
        <div class="row">
            @foreach ($courses as $course)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $course->name }}</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a href="{{ asset($course->course_pdf) }}" target="_blank">Course PDF</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ asset($course->exercise_pdf) }}" target="_blank">Exercise PDF</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ asset($course->exam_pdf) }}" target="_blank">Exam PDF</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>

    @include('footer')
</body>
</html>