<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="navbar.css">

<header id="header"> 
  
  <script>function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
  
  $( '#topheader .navbar-nav a' ).on( 'click', function () {
	$( '#topheader .navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
	$( this ).parent( 'li' ).addClass( 'active' );
});
  </script>

  <div class="topnav" id="myTopnav">
    <a href="/" class="active">Home</a>
    <a href="/clubs">Clubs</a>
    <a href="/staff">Staff</a>
    <a href="/event">Event</a>
    <a href="/games">Games</a>
    <a href="/players">Players</a>
    <a href="/selection">Selection</a>
    
    <a href="/logout" class="btn float-left">
      @if (Auth::check())
      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/logout" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }} <span class="caret"></span></a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}">
              {{ __('Logout') }}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
      </div>
      @endif
    </a>
   
  </a>
  </div> 

 
      
  </header>


 