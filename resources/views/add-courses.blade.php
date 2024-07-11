<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
</head>
<body>
<div class="header">
    <div class="navbar container">
        <div class="links">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" id="lyceeDropdown" role="button"> Lycée </a>
                <div class="dropdown-menu" aria-labelledby="lyceeDropdown">
                    <a class="dropdown-item" href="{{ route('courses.show', 1) }}">Tronc Commun</a>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#">1er Année bac</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('courses.show', 2) }}">1er-bac-sm</a>
                            <a class="dropdown-item" href="{{ route('courses.show', 3) }}">1er-bac-sx</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#">2éme Année bac </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('courses.show', 4) }}">2éme-bac-sm</a>
                            <a class="dropdown-item" href="{{ route('courses.show', 5) }}">2éme-bac-sx</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" id="collegeDropdown" role="button"> Collége </a>
                <div class="dropdown-menu" aria-labelledby="collegeDropdown">
                    <a class="dropdown-item" href="{{ route('courses.show', 6) }}">1er Année</a>
                    <a class="dropdown-item" href="{{ route('courses.show', 7) }}">2éme Année</a>
                    <a class="dropdown-item" href="{{ route('courses.show', 8) }}">3éme Année</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>