
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <a class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
    <a href="/logout" class="float-right">Logout</a>
  </div> 

 
      
  </header>


 