<div class="row v-center">
    <div class="header-item item-left">
        <div class="logo">
            <a href="{{ route('index.landing-page') }}">InFoo</a>
        </div>
    </div>
    <div class="header-item item-center">
        <div class="menu-overlay">
        </div>
        <nav class="menu">
            <div class="mobile-menu-head">
                <div class="go-back"><i class='bx bx-chevron-left'></i></div>
                <div class="current-menu-title"></div>
                <div class="mobile-menu-close" style="color: white;">&times;</div>
            </div>
            <ul class="menu-main">
                <li class="menu-item-has-children">
                    <a href="#">Synopsis <i class='bx bx-chevron-down'></i></a>
                    <div class="sub-menu mega-menu mega-menu-column-4">
                        <div class="list-item text-center">
                            <a href="{{ route('index.players') }}">
                                <img src="{{ asset('homepage_assets/football-jersey.png') }}" alt="player">
                                <h4 class="title">Player</h4>
                            </a>
                        </div>
                        <div class="list-item text-center">
                            <a href="{{ route('index.league-list-page') }}">
                                <img src="{{ asset('homepage_assets/football.png') }}" alt="Club">
                                <h4 class="title">League</h4>
                            </a>
                        </div>
                        <div class="list-item text-center">
                            <a href="{{ route('worldcup22.group-stage-point-table') }}">
                                <img src="{{ asset('homepage_assets/world-cup.png') }}" alt="World Cup 2022">
                                <h4 class="title">World Cup 2022</h4>
                            </a>
                        </div>
                        <div class="list-item text-center">
                            <a href="{{ route('index.legend-page') }}">
                                <img src="{{ asset('homepage_assets/shoot.png') }}" alt="Legend">
                                <h4 class="title">Legend</h4>
                            </a>
                        </div>
                    </div>
                </li>


                <li class="menu-item-has-children">
                    <a href="#">Up-to-Date<i class='bx bx-chevron-down'></i></a>
                    <div class="sub-menu single-column-menu">
                        <ul>
                            <li><a href="{{ route('index.league-list-page-prev') }}">Previous League Seasons</a>
                            </li>
                            <li><a href="#">News 2</a></li>
                            <li><a href="{{ route('index.compare-players') }}">Comapre Players</a></li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Pages <i class='bx bx-chevron-down'></i></a>
                    <div class="sub-menu single-column-menu">
                        <ul>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Register</a></li>

                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#">Username</a>
                </li>

            </ul>
        </nav>
    </div>

    <div class="header-item item-right">

        {{-- <h1><i class='bx bx-align-right' >UserName</i></h1> --}}

        <div class="mobile-menu-trigger">
            <span></span>
        </div>
    </div>

</div>