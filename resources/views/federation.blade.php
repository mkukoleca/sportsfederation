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
                    <li class="menu-has-children"><a href="">Igrači</a>
                        <ul>
                            <li class="menu-has-children"><a href="#">Tim NijePekmez</a>
                                <ul>
                                    <li><a href="#">Nina</a></li>
                                    <li><a href="#">Srđan</a></li>
                                    <li><a href="#">Saša</a></li>
                                    <li><a href="#">Predrag</a></li>
                                    <li><a href="#">Goran</a></li>
                                </ul>
                            </li>    
                            <li class="menu-has-children"><a href="#">Tim Sharks</a>
                                <ul>
                                    <li><a href="#">Renata</a></li>
                                    <li><a href="#">Tanja</a></li>
                                    <li><a href="#">Bilja</a></li>
                                    <li><a href="#">Dijana</a></li>
                                    <li><a href="#">Vrebac</a></li>
                                </ul>
                            </li>
                            <li class="menu-has-children"><a href="#">Tim Kornjača</a>
                                <ul>
                                    <li><a href="#">Jovana</a></li>
                                    <li><a href="#">Igor</a></li>
                                    <li><a href="#">Jelena</a></li>
                                    <li><a href="#">Igor</a></li>
                                    <li><a href="#">Nikola</a></li>
                                </ul>
                            </li>   
                        </ul>
                    </li>
                    <li><a href="#contact">Kontakt</a></li>
                </ul>
                
            </nav><!-- #nav-menu-container -->
            <a class="btn btn-danger float-left" href="/dashboard" role="button">Log in</a>
        </div>
    </header><!-- #header -->

    <!--==========================
    Hero Section
  ============================-->
    <section id="hero">
        <div class="hero-container">
            <h1>Dobrodošli na oficijalnu stranicu Rukometnog Saveza Republike Srpske</h1>
            <h2>Mi volimo rukomet</h2>
            <p><a href="/clubs" class="btn-get-started">CLUB</a>
                <a href="/staff" class="btn-get-started">STAFF</a>
                <a href="/selection" class="btn-get-started">SELECTION</a>
                <a href="/event" class="btn-get-started">EVENT</a>
                <a href="/players" class="btn-get-started">PLAYERS</a>
                <a href="/games" class="btn-get-started">GAMES</a></p>
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
                                <div class="panel-heading">
                                    <h4>Članovi saveza</h4>
                                </div>
                                <div class="panel-body">
                                    @foreach($fed->staff as $staff)
                                    <a href="/staff?type={{ $staff->type->id }}">{{$staff->type->name}}</a>
                                    <div>
                                        {{$staff->type->name}}: {{$staff->name}}
                                    </div>
                                    @endforeach
                                </div>
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
                            <div class="icon"><a href=""><i class="fa fa-phone-square"></i></a></div>
                            <h4 class="title"><a href="/federation/{{ $fed->id }}">Savez Update</a></h4>
                            <p class="description">Nove informacije možete dodati...</p>
                        </div>
                    </div>
                    <p></p>
                    <p></p>
                    <!--  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-bar-chart"></i></a></div>
              <h4 class="title"><a href="">Statistika</a></h4>
              <p class="description">Informacije o utakmicama</p>
            </div>
          </div>
          <p></p>
          <p></p>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="box">
              <div class="icon"><a href="/federation/staffs"><i class="fa fa-users"></i></a></div>
              <h4 class="title"><a href="">Upravni odbor</a></h4>
              <p class="description">Informacije o nasim clanovima</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-photo"></i></a></div>
              <h4 class="title"><a href="">Galerija slika</a></h4>
              <p class="description">Slike s utakmica i desavanja</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-user"></i></a></div>
              <h4 class="title"><a href="">Predsjednik</a></h4>
              <p class="description">Shoe Man</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-info"></i></a></div>
              <h4 class="title"><a href="">Istorija</a></h4>
              <p class="description">Istorija saveza</p>
            </div>
          </div>
        </div> -->

                </div>
        </section><!-- #services -->

        <!--==========================
    Call To Action Section
    ============================-->
        <section id="call-to-action">
            <div class="container wow fadeIn">
                <div class="row">
                    <div class="col-lg-9 text-center text-lg-left">
                        <h3 class="cta-title">STOP!! "ZABRANJENO KLIKTANJE"</h3>
                        <p class="cta-text"> Santa Maria della Salute</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="https://www.youtube.com/watch?v=DZ2J71OGjGY"
                            target="_blank">NE KLIKĆI! STROGO ZABRANJENO!</a>
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
                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <div class="pic"><img src="img/team-1.jpg" alt=""></div>
                            <h4>Tim Kornjače</h4>
                            <span>Spori, ali dobri</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <div class="pic"><img src="img/team-2.jpg" alt=""></div>
                            <h4>Tim NijePekmez</h4>
                            <span>Sve je, samo nije pekmez...by head of support, Nikolina Vranješ</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <div class="pic"><img src="img/team-3.jpg" alt=""></div>
                            <h4>Tim Sharks</h4>
                            <span>Ujedaju :D</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
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
                    <p class="section-description">Tra lalalallaalala javitee nam seeee</p>
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
                                <p>Kralja Petra I<br>Banja Luka,78000 BiH</p>
                            </div>

                            <div>
                                <i class="fa fa-envelope"></i>
                                <p>info@rukomet.com</p>
                            </div>

                            <div>
                                <i class="fa fa-phone"></i>
                                <p>+387 51 123 456</p>
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