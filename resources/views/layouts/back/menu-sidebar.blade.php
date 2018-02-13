<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

  <div class="menu_section">
    <h3>Live On</h3>
    <ul class="nav side-menu">
      <li><a href="{{ route('listing-categories') }}"><i class="fa fa-archive"></i>Listing des Catégories<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="e_commerce.html">E-commerce</a></li>

        </ul>
      </li>
      <li><a href="{{ route('listing-society')}}"><i class="fa fa-industry"></i>Listing des Sociétés<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="page_403.html">403 Error</a></li>

        </ul>
      </li>
      <li><a href="{{ route('listing-users')}}"><i class="fa fa-user"></i>Listing des Utilisateurs<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li><a href="#level1_1">Level One</a>
            <li><a>Level One<span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li class="sub_menu"><a href="level2.html">Level Two</a></li>
                <li><a href="#level2_1">Level Two</a></li>

              </ul>
            </li>
            <li><a href="#level1_2">Level One</a>
            </li>
        </ul>
      </li>
      <li><a href="{{ route('home') }}"><i class="fa fa-home"></i>Page D'accueil<span class="label label-success pull-right">Coming Soon</span></a></li>
    </ul>
  </div>

</div>
