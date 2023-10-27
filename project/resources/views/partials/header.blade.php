<nav id="header" class="navbar navbar-expand-sm navbar-light px-5">
    <div class="container-fluid">
        <h6 class="navbar-brand me-5" href="#">MOVIE LIST</h6>
        
        <div class="collapse navbar-collapse" id="navbarID">
            <div class="navbar-nav">
                <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}" aria-current="page" href="{{route('home')}}">Home</a>
                <a class="nav-link {{ Route::currentRouteName() === 'film' ? 'active' : '' }}" aria-current="page" href="{{route('film')}}" aria-current="page" href="#">Film</a>
                <a class="nav-link {{ Route::currentRouteName() === 'serie' ? 'active' : '' }}" aria-current="page" href="{{route('serie')}}" aria-current="page" href="#">Serie tv</a>
                <a class="nav-link {{ Route::currentRouteName() === 'releases' ? 'active' : '' }}" aria-current="page" href="{{route('releases')}}" aria-current="page" href="#">New releases</a>
            </div>
        </div>
    </div>
</nav>
