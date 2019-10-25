<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="navbar.css">
<div class="container-fluid">
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

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

  
       <a class="navbar-brand" href="/">Home</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">

  <ul class="navbar-nav">
  <li class="nav-item">

  <a class="nav-link" href="/clubs">Clubs</a>
      </li>

      <li class="nav-item">
      <a class="nav-link" href="/staff">Staff</a>
    </li> 

    <li class="nav-item">
      <a class="nav-link" href="/event">Event</a>
    </li> 

<li class="nav-item">
  <a class="nav-link" href="/games">Games</a>
</li> 

<li class="nav-item">
  <a class="nav-link" href="/players">Players</a>
</li> 

<li class="nav-item">
  <a class="nav-link" href="/selection">Selection</a>
</li> 
        
        
<li class="nav-item" style="position:relative">
            
            <a href="/logout" class="btn float-left">
              @if (Auth::check())
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/logout" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span></a>
                <div class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown" style="position:absolute">
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
  
  </li> 

  </nav>
 
  
  </header>


</div>