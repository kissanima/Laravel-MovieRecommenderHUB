<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
              <i class="bi bi-house-door"></i>
              <span>Home</span>
            </a>
          </li><!-- Home Nav -->
      
  
      <li class="nav-item">
        <a class="nav-link" href="{{ route('recommender') }}">
          <i class="bi bi-film"></i>
          <span>Movie Recommender</span>
        </a>
      </li><!-- Recommended Movies Nav -->
      
      <!-- ====== Movies ====== -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Movies</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>

        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>Popular</span>
            </a>
          </li>

          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Now Playing</span>
            </a>
          </li>

          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Upcoming</span>
            </a>
          </li>

          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Top Rated</span>
            </a>
          </li>

        </ul>
      </li><!-- Movies -->


      <!-- ====== Movies ====== -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>TV Shows</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>

        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>Popular</span>
            </a>
          </li>

          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Now Playing</span>
            </a>
          </li>

          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Upcoming</span>
            </a>
          </li>

          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Top Rated</span>
            </a>
          </li>

        </ul>
      </li><!-- Movies -->


      <li class="nav-item">
        <a class="nav-link" href="genres.html">
          <i class="bi bi-tags"></i>
          <span>Genres</span>
        </a>
      </li><!-- Genres Nav -->
  
      


    </ul>
  </aside><!-- End Sidebar-->