<!-- resources/views/course/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $course->name }}</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center mt-5">
        <h1>{{ $course->name }}</h1>
        <div class="list-group mt-4">
            @if(isset($pdfs['course']))
                <h2>Course PDFs</h2>
                @foreach($pdfs['course'] as $pdf)
                    <a href="{{ $pdf->url }}" class="list-group-item list-group-item-action" target="_blank">
                        {{ $pdf->name }}
                    </a>
                @endforeach
            @endif
            @if(isset($pdfs['exercise']))
                <h2 class="mt-4">Exercise PDFs</h2>
                @foreach($pdfs['exercise'] as $pdf)
                    <a href="{{ $pdf->url }}" class="list-group-item list-group-item-action" target="_blank">
                        {{ $pdf->name }}
                    </a>
                @endforeach
            @endif
            @if(isset($pdfs['exam']))
                <h2 class="mt-4">Exam PDFs</h2>
                @foreach($pdfs['exam'] as $pdf)
                    <a href="{{ $pdf->url }}" class="list-group-item list-group-item-action" target="_blank">
                        {{ $pdf->name }}
                    </a>
                @endforeach
            @endif
        </div>
    </div>
</body>
</html>
