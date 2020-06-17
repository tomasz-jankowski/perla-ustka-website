<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="pl">
      <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145023090-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-145023090-1');
    </script>
    <title>Willa Perła Ustka - Rezerwacja</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="/assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css"> 
    <link rel="stylesheet" href="/assets/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="/assets/css/aos.css">
    <link rel="stylesheet" href="/assets/css/style.css">  
</head>

<body>
  <div class="site-wrap">
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>  
    </div>
    
    <div class="site-navbar-wrap js-site-navbar bg-white">
      <div class="container">
        <a id="button"></a>
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo"><a href="/">Willa Perła</a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    <div class="d-inline-block d-xl-none  ml-md-0 mr-auto py-3"><a href="/#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
                    <ul class="site-menu js-clone-nav d-none d-xl-block">
                      <li><a href="http://apartamenty.perla.ustka.pl/">Apartamenty Perła</a></li>
                      <li>
                        <a href="/">Strona główna</a>
                      </li>
                      <li class="has-children">
                      <a>Oferta</a>
                        <ul class="dropdown arrow-top">
                          <li><a href="/apartament-2-osobowy">Apartament 2-os.</a></li>
                          <li><a href="/apartament-3-4-osobowy">Apartament 3-4-os.</a></li>
                          <li><a href="/apartament-4-5-osobowy">Apartament 4-5-os.</a></li>
                          <li><a href="/apartament-deluxe">Apartament Deluxe</a></li>
                        </ul>
                      </li>
                      <li><a href="/cennik">Cennik</a></li>
                      <li><a href="/atrakcje">Atrakcje</a></li>
                      <li class="active"><a href="#top">Rezerwacja</a></li>
                      <li><a href="/kontakt">Kontakt</a></li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="site-blocks-cover overlay" style="background-image: url(/assets/images/reze.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1 class="mb-4">Rezerwacja</h1>
              <h2 class="caption">Zarezerwuj nocleg</h2>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-section site-section-sm" id="formRedir">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-lg-8 mb-5">      
                <form action="mail.php" method="POST" class="p-5 bg-white">
                  <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                      <label class="font-weight-bold" for="fullname">Imię i nazwisko</label>
                      <input type="text" id="fullname" name="fullname" class="form-control" required value="<?php echo $_SESSION['fullname'];?>">
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-md-12">
                      <label class="font-weight-bold" for="email">Adres mailowy</label>
                      <input type="text" id="email" name="email" class="form-control" required value="<?php echo $_SESSION['email'];?>">
                      <?php
                        if (isset($_SESSION['e_email']))
                        {
                          echo $_SESSION['e_email'];
                          unset($_SESSION['e_email']);
                        }
                      ?>
                    </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                      <label class="font-weight-bold" for="phone">Nr telefonu</label>
                      <input type="tel" id="phone" name="phone" class="form-control" required value="<?php echo $_SESSION['phone'];?>">
                    </div>
                  </div>
    
                  <div class="row form-group">
                      <div class="col-md-12">
                        <label class="font-weight-bold" for="dateStart">Rezerwacja od</label> 
                        <input type="date" id="dateStart" name="dateStart" class="form-control" required value="<?php echo $_SESSION['dateStart'];?>">
                        <?php
                        if (isset($_SESSION['e_dateStart']))
                        {
                          echo $_SESSION['e_dateStart'];
                          unset($_SESSION['e_dateStart']);
                        }
                        ?>
                      </div>
                    </div>

                  <div class="row form-group">
                      <div class="col-md-12">
                        <label class="font-weight-bold" for="dateEnd">Rezerwacja do</label> 
                        <input type="date" id="dateEnd" name="dateEnd" class="form-control" required value="<?php echo $_SESSION['dateEnd'];?>">
                        <?php
                        if (isset($_SESSION['e_date2']))
                        {
                          echo$_SESSION['e_date2'];
                          unset($_SESSION['e_date2']);
                        }

                        if (isset($_SESSION['e_dateEnd']))
                        {
                          echo $_SESSION['e_dateEnd'];
                          unset($_SESSION['e_dateEnd']);
                        }

                        if (isset($_SESSION['e_dates']))
                        {
                          echo $_SESSION['e_dates'];
                          unset($_SESSION['e_dates']);
                        }
                        ?>
                      </div>
                    </div>

                  <div class="row form-group">
                      <div class="col-md-12">
                        <label class="font-weight-bold" for="apartment">Apartament</label> 
                        <!-- <input type="date" id="apartment" class="form-control" required placeholder=""> -->
                        <br>
                        <select name="apartment" id="apartment" name="apartment" class="form-control" required>
                          <option value="2 osobowy" <?php if($_SESSION['apartment'] == "2 osobowy") echo 'selected'; ?>>Apartament 2-osobowy</option>
                          <option value="3-4 osobowy" <?php if($_SESSION['apartment'] == "3-4 osobowy") echo 'selected'; ?>>Apartament 3-4-osobowy</option>
                          <option value="4-5 osobowy" <?php if($_SESSION['apartment'] == "4-5 osobowy") echo 'selected'; ?>>Apartament 4-5-osobowy</option>
                          <option value="Deluxe" <?php if($_SESSION['apartment'] == "Deluxe") echo 'selected'; ?>>Apartament Deluxe</option>
                        </select>
                      </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                          <label class="font-weight-bold" for="number">Ilość osób</label> 
                          <!-- <input type="number" id="number" class="form-control" required placeholder=""> -->
                          <br>
                          <select name="number" id="number" class="form-control" required>
                            <option value="1" <?php if($_SESSION['number'] == 1) echo 'selected'?> >1</option>
                            <option value="2" <?php if($_SESSION['number'] == 2) echo 'selected'?> >2</option>
                            <option value="3" <?php if($_SESSION['number'] == 3) echo 'selected'?> >3</option>
                            <option value="4" <?php if($_SESSION['number'] == 4) echo 'selected'?> >4</option>
                            <option value="5" <?php if($_SESSION['number'] == 5) echo 'selected'?> >5</option>
                            <option value="6" <?php if($_SESSION['number'] == 6) echo 'selected'?> >6</option>
                          </select>
                        </div>
                      </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                          <label class="font-weight-bold" for="message">Wiadomość</label> 
                          <textarea name="message" id="message" cols="30" rows="5" class="form-control"><?php echo $_SESSION['message'];?></textarea>
                        </div>
                      </div>
    
                  <div class="row form-group">
                    <div class="col-md-12">
                      <p>Wysyłając zapytanie poprzez ten formularz oświadczasz zapoznanie się z <a href="//polityka-prywatnosci">Polityką Prywatności</a> oraz jej akceptację.</p>
                      <input type="submit" name="submitForm" id="submitForm" value="Rezerwuj!" class="btn btn-primary pill px-4 py-2">
                      <?php
                        if (isset($_SESSION['mailSent']))
                        {
                          echo $_SESSION['mailSent'];
                          unset($_SESSION['mailSent']);
                        }
                      ?>
                    </div>
                  </div>
                </form>
              </div>
    
              <div class="col-lg-4">
                <div class="p-4 mb-3 bg-white">
                  <h3 class="h5 text-black mb-3">Dane kontaktowe</h3>
                  <p class="mb-0 font-weight-bold">Adres</p>
                  <p class="mb-4"><a href="https://www.google.com/maps/place/Willa+Per%C5%82a/@54.587012,16.8557093,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x2377e5a93520f0f0!8m2!3d54.587012!4d16.857898?hl=pl">ul. Sprzymierzeńców 1, 76-270 Ustka</a></p>
                  <p class="mb-0 font-weight-bold">Phone</p>
                  <p class="mb-4"><a href="/tel:+48513780807">+48 513 780 807</a></p>
                  <p class="mb-0 font-weight-bold">Adres mailowy</p>
                  <p class="mb-0"><a href="/mailto:pensjonat@perla.ustka.pl">pensjonat@perla.ustka.pl</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h3 class="footer-heading mb-4 text-white mt-sm-4 mt-md-0">Dane kontaktowe</h3>
              <hr class="hr-footer">
              <p><a class="footer-text" href="https://www.google.com/maps/place/Willa+Per%C5%82a/@54.587012,16.8557093,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x2377e5a93520f0f0!8m2!3d54.587012!4d16.857898?hl=pl">ul. Sprzymierzeńców 1, 76-270 Ustka</a></p>
              <p><a class="footer-text" href="/tel:+48513780807"><span class="icon-phone2 small"></span> +48 513 780 807</a></p>
              <p><a class="footer-text" href="/mailto:pensjonat@perla.ustka.pl">pensjonat@perla.ustka.pl</a></p>
            </div>
            <div class="col-md-4">
                  <h3 class="footer-heading mb-4 text-white mt-sm-4 mt-md-0">Ważne informacje</h3>
                  <hr class="hr-footer">
                    <ul class="list-unstyled">
                      <li><a href="/regulamin" class="footer-text"><span class="icon-keyboard_arrow_right small"></span> Regulamin</a></li>
                      <li><a href="/polityka-prywatnosci" class="footer-text"><span class="icon-keyboard_arrow_right small"></span> Polityka Prywatności i pliki cookies</a></li>
                    </ul>
            </div>
            <div class="col-md-4">
            <h3 class="footer-heading mb-4 text-white mt-sm-4 mt-md-0">Zobacz także</h3>
            <hr class="hr-footer">
            <ul class="list-unstyled">
              <li><a href="http://apartamenty.perla.ustka.pl" class="footer-text"><span class="icon-keyboard_arrow_right small"></span> Apartamenty Perła</a></li>
              <li><a href="http://www.ustka.pl/" class="footer-text"><span class="icon-keyboard_arrow_right small"></span> Oficjalna strona Ustki</a></li>
              <li><a href="http://ustka.travel/" class="footer-text"><span class="icon-keyboard_arrow_right small"></span> Informacja turystyczna</a></li>
            </ul>
            </div>
          </div>
          <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
              <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved | This template is made with <a href="https://colorlib.com" target="_blank" >Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>
        </div>
      </footer>
  </div>

  <script src="/assets/js/jquery-3.3.1.min.js"></script>
  <script src="/assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/assets/js/jquery-ui.js"></script>
  <script src="/assets/js/popper.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  <script src="/assets/js/owl.carousel.min.js"></script>
  <script src="/assets/js/jquery.stellar.min.js"></script>
  <script src="/assets/js/jquery.countdown.min.js"></script>
  <script src="/assets/js/jquery.magnific-popup.min.js"></script>
  <script src="/assets/js/bootstrap-datepicker.min.js"></script>
  <script src="/assets/js/aos.js"></script>
  <script src="/assets/js/mediaelement-and-player.min.js"></script>
  <script src="/assets/js/main.js"></script>
  <script src="/assets/js/form.js"></script>
  <script src="/assets/js/jcode.js"></script>
</body>

</html>