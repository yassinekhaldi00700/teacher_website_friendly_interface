<div class="header">
    <div class="navbar container">
        <img src="/assets/vectors/Frame 1.svg" alt="">
        <div class="links">
            <a href="#acceuil">Acceuil</a>
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" id="lyceeDropdown" role="button"> Lycée </a>
                <div class="dropdown-menu" aria-labelledby="lyceeDropdown">
                    <a class="dropdown-item" href="{{ route('year.show', 1) }}">Tronc Commun</a>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="">1er Année bac</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('year.show', 2) }}">1er-bac-sm</a>
                            <a class="dropdown-item" href="{{ route('year.show', 3) }}">1er-bac-sx</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="">2éme Année bac </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('year.show', 4) }}">2éme-bac-sm</a>
                            <a class="dropdown-item" href="{{ route('year.show', 5) }}">2éme-bac-sx</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" id="collegeDropdown" role="button"> Collége </a>
                <div class="dropdown-menu" aria-labelledby="collegeDropdown">
                    <a class="dropdown-item" href="{{ route('year.show', 6) }}">1er Année</a>
                    <a class="dropdown-item" href="{{ route('year.show', 7) }}">2éme Année</a>
                    <a class="dropdown-item" href="{{ route('year.show', 8) }}">3éme Année</a>
                </div>
            </div>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
        </div>
        <a href="" class="button">Login</a>
        
    </div>
