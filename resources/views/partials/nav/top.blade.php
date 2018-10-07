<nav>
  <div class="nav-wrapper">
    <a href="#" data-target="slide-out" class="sidenav-trigger show-on-small">
      <i class="material-icons">menu</i>
    </a>
    <a href="/" class="brand-logo center">
      <img src="{{ asset('images/personal-logo-full.png') }}" alt="Indra Sukmajaya" height="40">
    </a>
    <ul class="left hide-on-med-and-down">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Categories</a></li>
      <li><a href="#">Archives</a></li>
    </ul>
    @guest
      {{-- <ul class="right hide-on-med-and-down">
        <li><a href="{{ route('login') }}">Login</a></li>
        <li>
          @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
          @endif
        </li>
      </ul>
    @else --}}
      <a class="dropdown-trigger right hide-on-med-and-down" data-target="profile-dropdown">
        <img src="http://dummyimage.com/30x30/4d494d/686a82.gif&text=A" alt="avatar" height="34" class="circle">
      </a>
      <ul id="profile-dropdown" class="dropdown-content">
        <li><a href="#"><i class="material-icons">person</i>Profile</a></li>
        <li><a href="#"><i class="material-icons">dashboard</i>Dashboard</a></li>
        <li class="divider"></li>
        <li>
          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons">exit_to_app</i>Log Out</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </li>
      </ul>
    @endguest
    {{-- <m-search></m-search> --}}
    <div class="searchbar right" :class="{ active: searchIsOpen }">
      <form action="#" method="POST" autocomplete="off" class="search-wrapper">
        <div class="search-field">
          <a class="search-icon" @click="openSearch"><i class="material-icons">search</i></a>
          <input type="text" id="search-input" placeholder="Search" class="browser-default search-input" v-model="searchText">
          <a class="close-icon" @click="closeSearch"><i class="material-icons">close</i></a>
        </div>
      </form>
      <div class="search-popup" :class="{ 'active': searchText !== '' }">
        <ul class="search-suggestion">
          <li><a href="#" class="waves-effect">Google</a></li>
          <li><a href="#" class="waves-effect">Apple</a></li>
          <li><a href="#" class="waves-effect">Microsoft</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>