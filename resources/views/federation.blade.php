<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rukometni savez REPUBLIKE SRPSKE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap profile cards CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  border-radius: 5px;
  margin-right: 20px;
}
img{
    border-radius: 5px;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    

</head>

<body>

    <!--==========================
  Header
  ============================-->
    <header id="header">
        <div class="container">

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#hero">Početna</a></li>
                    <li><a href="#services">O savezu</a></li>
                    <li><a href="#team">Timovi</a></li>
                    <li class="menu-has-children"><a href="#play">Igrači</a>
                        <ul>
                            <li class="menu-has-children"><a href="#play">Tim NijePekmez</a>
                                <ul>
                                    <li><a href="#play">Nikolina</a></li>
                                    <li><a href="#play">Srđan</a></li>
                                    <li><a href="#play">Saša</a></li>
                                    <li><a href="#play">Predrag</a></li>
                                    <li><a href="#play">Goran</a></li>
                                </ul>
                            </li>
                            <li class="menu-has-children"><a href="#play">Tim Sharks</a>
                                <ul>
                                    <li><a href="#play">Biljana</a></li>
                                    <li><a href="#play">Tanja</a></li>
                                    <li><a href="#play">Renata</a></li>
                                    <li><a href="#play">Dijana</a></li>
                                    <li><a href="#play">Danijel</a></li>
                                </ul>
                            </li>
                            <li class="menu-has-children"><a href="#play">Tim Kornjače</a>
                                <ul>
                                    <li><a href="#play">Jovana</a></li>
                                    <li><a href="#play">Igor</a></li>
                                    <li><a href="#play">Jelena</a></li>
                                    <li><a href="#play">Igor</a></li>
                                    <li><a href="#play">Nikola</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#contact">Kontakt</a></li>
                    @if (Auth::check())
                    <li><a href="/clubs">Clubs</a></li>
                    @endif
                </ul>

            </nav><!-- #nav-menu-container -->
            <div class="butt">
                <ul class="nav">
                    @if (Auth::check())
                        <li class="nav-item" style="padding:3px"><a class="btn btn-primary float-left"href="/logout" role="button" >Logout</a></li>
                    @else
                        <li class="nav-item" style="padding:3px"><a class="btn btn-primary float-left"href="/register" role="button"> Register</a></li>
                        <li class="nav-item" style="padding:3px"><a class="btn btn-primary float-left" href="/login" role="button">Login</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </header><!-- #header -->


    <!--==========================
    Hero Section
  ============================-->
    <section id="hero">
        <div class="hero-container">
            <h1>Dobrodošli na oficijalnu stranicu Rukometnog Saveza Republike Srpske</h1>
            <h2>Mi volimo rukomet</h2>
            <!--<p><a href="/clubs" class="btn-get-started">CLUB</a>
                <a href="/staff" class="btn-get-started">STAFF</a>
                <a href="/selection" class="btn-get-started">SELECTION</a>
                <a href="/event" class="btn-get-started">EVENT</a>
                <a href="/players" class="btn-get-started">PLAYERS</a>
                <a href="/games" class="btn-get-started">GAMES</a></p>-->
        </div>
    </section><!-- #hero -->

    <main id="main">

        <!--==========================
      Services Section
    ============================-->
        <section id="services">
            <div class="container wow fadeIn">
                <div class="section-header">
                    <h3 class="section-title">O savezu</h3>

                    <p class="section-description">
                        @foreach($federations as $fed)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3>{{ $fed->name }}</h3>
                            </div>

                            <div class="panel-body">
                                <p> {{ $fed->history }}</p>
                                <p> {{ $fed->description }}</p>
                                <p>Trenutni predsjednik saveza je {{ $fed->president }}.</p>
                            </div>
                            <p>
                               {{--  <div class="panel-heading">
                                    <h4>Članovi saveza</h4>
                                </div>
                                <div class="panel-body">
                                    @foreach($fed->staff as $staff)
                                    <a href="/staff?type={{ $staff->type->id }}">{{$staff->type->name}}</a>
                                    <div>
                                        {{$staff->type->name}}: {{$staff->name}}
                                    </div>
                                    @endforeach
                                </div> --}}
                        </div>
                        @endforeach
                    </p>
                    <p>
                        <br>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.2s">
                        <p></p>
                        <p></p>
                        <div class="box">
                            <div class="icon"><a href=""><i class="fa fa-users"></i></a></div>
                            <h4 class="title"><a href="/federation/{{ $fed->id }}">Savez Update</a></h4>
                            <p class="description">Nove informacije možete dodati...</p>
                        </div>
                    </div>
                </div>
                     <!--==========================
      Coaches Section
    ============================-->
    <section>
            <h2 style="text-align:center">Predavači</h2>
            <p style="text-align:center; color:#ccc">Ovo je naš tim predavača</p>
        <div class="row">
            <div class="col-4">
                <div class="card">
					<img src="img/mirko.kukoleca.jpg" alt="Mirko" style="width:100%">
					<h1>Mirko Kukoleča</h1>
					<p class="title">ITP100 2019</p>
					<div style="margin: 24px 0;"> 
						<a href="#"><i class="fa fa-linkedin"></i></a>  
						<a href="#"><i class="fa fa-facebook"></i></a> 
					</div>
					<p><button style="color:#ccc;">mirko@invenit.io</button></p>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="margin-left:50px;">
                <img src="img/nevena.png" alt="Nevena" style="width:100%">
                <h1>Nevena Mićić</h1>
                <p class="title">ITP100 2019</p>
                <div style="margin: 24px 0;"> 
                    <a href="#"><i class="fa fa-linkedin"></i></a>  
                    <a href="#"><i class="fa fa-facebook"></i></a> 
                </div>
                <p><button style="color:#ccc;">nevena@invenit.io</button></p>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="margin-left:0px;">
                <img src="img/sergej.v.jpg" alt="Sergej" style="width:100%">
                <h1>Sergej Vuković</h1>
                <p class="title">ITP100 2019</p>
                <div style="margin: 24px 0;"> 
                    <a href="#"><i class="fa fa-linkedin"></i></a>  
                    <a href="#"><i class="fa fa-facebook"></i></a> 
                </div>
                <p><button style="color:#ccc;">sergejv95@gmail.com</button></p>
                </div>
            </div>
        </div>
        </section><!-- #treneri -->

            </div>
        </section><!-- #services -->

        <!--==========================
    Call To Action Section
    ============================-->
        <section id="call-to-action">
            <div class="container wow fadeIn">
                <div class="row">
                    <div class="col-lg-9 text-center text-lg-left">
                        <h3 class="cta-title">RUKOMEZNI SAVEZ REPUBLIKE SRPSKE</h3>
                        <p class="cta-text">Rukometni Savez RS krovna je sportska organizacija koje
                            okuplja sve rukometne klubove, rukometne sudije i organizuje sportska takmičenja u rukometu
                            na teritoriji Republike Srpske.
                        </p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle"
                            href=https://sr.wikipedia.org/wiki/%D0%A0%D1%83%D0%BA%D0%BE%D0%BC%D0%B5%D1%82%D0%BD%D0%B8_%D1%81%D0%B0%D0%B2%D0%B5%D0%B7_%D0%A0%D0%B5%D0%BF%D1%83%D0%B1%D0%BB%D0%B8%D0%BA%D0%B5_%D0%A1%D1%80%D0%BF%D1%81%D0%BA%D0%B5"
                            target="_blank">SAZNAJ VIŠE</a>
                    </div>
                </div>

            </div>
        </section><!-- #call-to-action -->

        <!--==========================
      Team Section
    ============================-->
        <section id="team">
            <div class="container wow fadeInUp">
                <div class="section-header">
                    <h3 class="section-title">Timovi</h3>
                    <p class="section-description">Bekend timovi u razvoju website-a rukometne reprezentacije</p>
                </div>
                <div class="row justify-content-center">
                        @foreach($clubs as $club)
                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <div class="pic"><img src="{{$club->thumbnail}}" alt=""></div>
                            <h4>{{$club->name}}</h4>
                            <span>{{$club->history}}</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>  
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section><!-- #team -->
           <!--==========================
    Call To Action Section
    ============================-->
    <section id="call-to-action">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-lg-12 text-center text-lg-left">
                    <h3 class="cta-title">DEŠAVANJA</h3>
                    <p class="cta-text">   
                        @foreach($events as $event)
                        <p class="cta-text">  {{$event->season}}</p>
                        <p class="cta-text"> <img src="ball.ico" alt="Handball icon"> {{$event->type}} :  " {{$event->name}} "  {{$event->description}}</p>
                        <br><br>
                        @endforeach
                    </p>
                </div>
            </div>
        </div>
    </section><!-- #call-to-action -->
<p></p>
<br>
        <section id="play">
            <div class="container wow fadeInUp">
                <div class="section-header">
                    <h3 class="section-title">IGRAČI</h3>
                    <p class="section-description">Ovo su naši backend igrači po timovima</p>
                </div>
                <div>
                    <h3><b> Tim Nije pekmez</b></h3><br>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="card" style="width:200px">
                                <img class="card-img-top" src="img/nikolina.jpg">
                                <div class="card-body">
                                    <h4 class="card-title">Nikolina Vranješ</h4>
                                    <p class="card-text">Član tima nije pekmez.</p>
                                </div>
                            </div>
                            <div class="card" style="width:200px">
                                <img class="card-img-top" src="img/team-2.jpg">
                                <div class="card-body">
                                    <h4 class="card-title">Srđan Knežević</h4>
                                    <p class="card-text"> Član tima nije pekmez.</p>
                                </div>
                            </div>
                            <div class="card" style="width:200px">
                                <img class="card-img-top" src="img/sasa.jpg">
                                <div class="card-body">
                                    <h4 class="card-title">Saša Oljača</h4>
                                    <p class="card-text">Član tima nije pekmez.</p>
                                </div>
                            </div>
                            <div class="card" style="width:200px">
                                <img class="card-img-top" src="img/pedja.jpg">
                                <div class="card-body">
                                    <h4 class="card-title">Predrag Koprena</h4>
                                    <p class="card-text">Član tima nije pekmez.</p>
                                </div>
                            </div>
                            <div class="card" style="width:200px">
                                <img class="card-img-top" src="img/lukac.jpg">
                                <div class="card-body">
                                    <h4 class="card-title">Goran Lukač</h4>
                                    <p class="card-text">Član tima nije pekmez.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="#play">
                    <h3><b>Tim Sharks</b> </h3><br>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="card" style="width:200px">
                                <img class="card-img-top" src="img/team-3.jpg">
                                <div class="card-body">
                                    <h4 class="card-title">Bilja </h4>
                                    <p class="card-text">Član tima Sharks</p>
                                </div>
                            </div>
                            <div class="card" style="width:200px">
                                <img class="card-img-top" src="img/team-3.jpg">
                                <div class="card-body">
                                    <h4 class="card-title">Tanja Maksimović</h4>
                                    <p class="card-text">Član tima Sharks</p>
                                </div>
                            </div>
                            <div class="card" style="width:200px">
                                <img class="card-img-top" src="img/team-3.jpg">
                                <div class="card-body">
                                    <h4 class="card-title">Renata Šikanjić</h4>
                                    <p class="card-text">Član tima Sharks</p>
                                </div>
                            </div>
                            <div class="card" style="width:200px">
                                <img class="card-img-top" src="img/team-3.jpg">
                                <div class="card-body">
                                    <h4 class="card-title">Dijana Kovačević</h4>
                                    <p class="card-text">Član tima Sharks</p>
                                </div>
                            </div>
                            <div class="card" style="width:200px">
                                <img class="card-img-top" src="img/team-3.jpg">
                                <div class="card-body">
                                    <h4 class="card-title">Danijel Vrebac</h4>
                                    <p class="card-text">Član tima Sharks</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div>
                    <h3><b>Tim Kornjače</b> </h3><br>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="card" style="width:200px">
                                <img class="card-img-top" src="img/team-1.jpg">
                                <div class="card-body">
                                    <h4 class="card-title">Jovana</h4>
                                    <p class="card-text">Član tima Kornjače.</p>
                                </div>
                            </div>
                            <div class="card" style="width:200px">
                                <img class="card-img-top" src="img/team-1.jpg">
                                <div class="card-body">
                                    <h4 class="card-title">Igor</h4>
                                    <p class="card-text"> Član tima Kornjače.</p>
                                </div>
                            </div>
                            <div class="card" style="width:200px">
                                <img class="card-img-top" src="img/team-1.jpg">
                                <div class="card-body">
                                    <h4 class="card-title">Jelena</h4>
                                    <p class="card-text">Član tima Kornjače.</p>
                                </div>
                            </div>
                            <div class="card" style="width:200px">
                                <img class="card-img-top" src="img/$igormusic.jpg">
                                <div class="card-body">
                                    <h4 class="card-title"><a style="font-size:18px;" href="https://github.com/agentsmith-source/stunning-octo-broccoli/tree/agentsmith-source-mojeideje">$Igor->php->musiĆ</a></h4>
                                    <p class="card-text">Član tima Kornjače.</p>
                                </div>
                            </div>
                            <div class="card" style="width:200px">
                                <img class="card-img-top" src="img/team-1.jpg">
                                <div class="card-body">
                                    <h4 class="card-title">Nikola Dafinić</h4>
                                    <p class="card-text">Član tima Kornjače.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            </div>
        </section><!-- #team -->

        <!--==========================
      Contact Section
    ============================-->
        <section id="contact">
            <div class="container wow fadeInUp">
                <div class="section-header">
                    <h3 class="section-title">Kontakt</h3>
                    <p class="section-description"></p>
                </div>
            </div>

            <!-- Uncomment below if you wan to use dynamic maps -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5664.844430855579!2d17.193379!3d44.772197!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475e03062ccd6b05%3A0x73fe3280dfee195d!2sBanja%20Luka%2078000%2C%20Bosnia%20and%20Herzegovina!5e0!3m2!1sen!2sus!4v1570567399630!5m2!1sen!2sus"
                width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

            <div class="container wow fadeInUp mt-5">
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-4">

                        <div class="info">
                            <div>
                                <i class="fa fa-map-marker"></i>
                                <p>Braće Pantić 4<br>Banja Luka,78000 BiH</p>
                            </div>

                            <div>
                                <i class="fa fa-envelope"></i>
                                <p>info@rukomet.com</p>
                            </div>

                            <div>
                                <i class="fa fa-phone"></i>
                                <p>+387 51 223 160</p>
                            </div>
                        </div>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>

                    </div>

                    <div class="col-lg-5 col-md-8">
                        <div class="form">
                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                            <div id="errormessage"></div>
                            <form action="" method="post" role="form" class="contactForm">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" data-rule="email"
                                        data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" data-rule="minlen:4"
                                        data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required"
                                        data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validation"></div>
                                </div>
                                <div class="text-center"><button type="submit">Send Message</button></div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- #contact -->

    </main>

    <!--==========================
    Footer
  ============================-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">

            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>PropaliБекендаши</strong>. All Rights Reserved
            </div>
            <div class="credits">

                Designed by <a href="#hero">Tim_NijePekmez</a>
            </div>
        </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>

    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>

</body>

</html>