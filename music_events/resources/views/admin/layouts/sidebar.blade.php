
  <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('list_genre') }}">
              <span data-feather="genre"></span>
              Genre
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('list_artist') }}">
              <span data-feather="genre"></span>
              Artist
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('list_venue') }}">
              <span data-feather="genre"></span>
              Venue
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('list_events') }}">
              <span data-feather="genre"></span>
              Events
            </a>
          </li>
          
        </ul>

        
      </div>
    </nav>