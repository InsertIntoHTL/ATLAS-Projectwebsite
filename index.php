<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8" />
    <title>Project-Atlas</title>
    <link rel="icon" type="image/svg" href="assets/images/ATLAS_Logo.svg">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap and JQuerry -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


    <!-- Fontawesome -->
    <link rel="stylesheet" href="./resources/fontawesome-free-5.14.0-web/css/all.css" />
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,500&display=swap" rel="stylesheet">

    <!-- Main CSS -->
    <link rel="stylesheet" href="./styles/main.css" />

    <!--FullPageScrollPureJS -->
    <link rel="stylesheet" type="text/css" href="styles/full-page-scroll.min.css" />
    <script src="js/full-page-scroll.min.js"></script>

    <!-- Recaptcha -->
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>

    <!-- Three.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r120/three.min.js"></script>

    <script src="./js/member.js"></script>
    <script src="./js/app.js"></script>
</head>

<body>

    <header>
        <a href="#0"><img src="./assets/images/ATLAS_Logo.svg" alt="ATLAS-Logo" class="btn" /></a>
        <div id="burger-wrapper" onclick="menu()" class="btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>

    <div id="nav-info">
        <h4></h4>
    </div>

    <div id="menu" class="menu hidden">
        <div id="links">
            <p><a href="#0" class="menu-link btn active" onclick="menu()">HOME</a></p>
            <p><a href="#1" class="menu-link btn" onclick="menu()">INFO</a></p>
            <p><a href="#2" class="menu-link btn" onclick="menu()">TEAM</a></p>
            <p><a href="#3" class="menu-link btn" onclick="menu()">SPONSOREN</a></p>
            <p><a href="#4" class="menu-link btn" onclick="menu()">KONTAKT</a></p>
            <p><a href="#4" class="menu-link btn" onclick="menu()">DATEIEN</a></p>
        </div>
    </div>

    <main id="main" class="scroll-container">
        <section id="Home">
            <h1>AT<span>L</span>AS</h1>
            <img src="./assets/images/ATLAS_Logo.svg" id="logo-big" alt="ATLAS-Logo">
            <div class="scroll-container">
                <span>
                    <span></span>
                </span>
                <p>SCROLL</p>
            </div>
        </section>

        <section id="About" class="col-xs-12">
            <div class="row d-flex justify-content-center">
                <h2 class="headline col-8">INFO</h2>
                <p class="col-8 col-lg-6">
                    Zwei flinke Boxer jagen die quirlige Eva und ihren Mops durch Sylt. Franz jagt im komplett
                    verwahrlosten Taxi quer durch Bayern. Zwölf Boxkämpfer jagen Viktor quer über den großen Sylter
                    Deich. Vogel Quax zwickt Johnys Pferd Bim. Sylvia wagt quick den Jux bei Pforzheim. Polyfon
                    zwitschernd aßen Mäxchens Vögel Rüben, Joghurt und Quark. "Fix, Schwyz!" quäkt Jürgen blöd vom Paß.
                    Victor jagt zwölf Boxkämpfer quer über den großen Sylter Deich. Falsches Üben von Xylophonmusik
                    quält jeden größeren Zwerg. Heizölrückstoßabdämpfung. Zwei flinke Boxer jagen die quirlige Eva und
                    ihren Mops durch Sylt. Franz jagt im komplett verwahrlosten Taxi quer durch Bayern. Zwölf Boxkämpfer
                    jagen Viktor
                </p>
            </div>
        </section>
        <section id="Team" class="col-12">
            <div class="row d-flex justify-content-center">
                <h2 class="headline col-8">TEAM</h2>
                <div class="col-8">
                    <div class="row">
                        <div class="col-3 col-lg-1 btn" id="prev">
                            <div class="carousel-control-prev team-prev" onclick="prevMember()">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </div>
                        </div>
                        <div class="col-6 col-lg-6">
                            <div class="row">
                                <div class="membercard col-12">
                                    <div class="row">
                                        <div class="profile-picture col-12 col-lg-4">
                                            <img id="member-pic" src="./assets/images/team/filip.jpeg" />
                                        </div>
                                        <div class="infotext col-12 col-lg-8">
                                            <div>
                                                <h3 id="member-name">Filip Milovanovic</h3>
                                                <p id="member-role">Scrum Master</p>
                                                <p id="member-team">CORE</p>
                                                <div class="socials">
                                                    <img id="member-link1" />
                                                    <img id="member-link2" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 col-lg-1 btn" id="next">
                            <div class="carousel-control-next team-next" onclick="nextMember()">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </div>
                        </div>
                        <div class="spinning-spheres col-0 col-md-4">
                            <canvas id="spheres"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section id="Sponsors" class="col-12">
            <div class="row d-flex justify-content-center">
                <h2 class="headline col-8">SPONSOREN</h2>
                <div id="carousel" class="carousel slide col-8" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="resources/logos/a1_logo.svg" alt="A1 Logo" height="250px;">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="resources/logos/easyname_logo_light.svg" alt="Easyname Logo" height="80px;">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="resources/logos/a1_logo.svg" alt="Third slide" height="250px;">
                        </div>
                    </div>
                    <a class="carousel-control-prev btn" href="#carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next btn" href="#carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>

        <section id="Contact" class="col-12">
            <div class="row d-flex justify-content-center">

                <h2 class="headline col-8">KONTAKT</h2>

                <?php if (isset($_GET['success'])) {
                    echo '<div class="success">Vielen Dank für deine Nachricht!</div>';
                } else {
                    echo '<form action="send_mail.php" method="post" role="form"
                                                    onsubmit="return submitUserForm();"
                                                  class="contact100-form validate-form col-8 col-lg-6">
                                                  <span class="contact100-form-title">
                                                      Benachrichtige uns
                                                  </span>

                                                  <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
                                                      <span class="label-input100">Name</span>
                                                      <input class="input100" type="text" name="name" placeholder="Dein Name">
                                                      <span class="focus-input100"></span>
                                                  </div>

                                                  <div class="wrap-input100 rs1-wrap-input100 validate-input"
                                                      data-validate="Valid email is required: ex@abc.xyz">
                                                      <span class="label-input100">Email</span>
                                                      <input class="input100" type="text" name="email" placeholder="Deine E-Mail Adresse">
                                                      <span class="focus-input100"></span>
                                                  </div>

                                                  <div class="wrap-input100 validate-input" data-validate="Message is required">
                                                      <span class="label-input100">Nachricht</span>
                                                      <textarea class="input100" name="message" placeholder="Teile uns etwas mit..."></textarea>
                                                      <span class="focus-input100"></span>
                                                  </div>

                                                  <div class="g-recaptcha mb-4" data-sitekey="6Lcm3cQZAAAAAH-An0QXTOLF0ALAi8kfn1sfdZdQ" data-callback="verifyCaptcha"></div>
                                                  <span class="spacer"></span>
                                                  <div id="g-recaptcha-error"></div>

                                                  <div class="container-contact100-form-btn">
                                                      <button class="contact100-form-btn" type="submit">
                                                          <span>
                                                              Senden
                                                              <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                                          </span>
                                                      </button>
                                                  </div>
                                              </form>';
                }
                ?>


            </div>

        </section>

        <section id="Files" class="col-12">
            <div class="files-container row d-flex justify-content-center">
                <h2 class="headline col-8">DATEIEN</h2>

                <div class="col-8 row">
                    <div class="single-file col-12 col-lg-6 row">
                        <a href="./resources/files/da_ansuchen_core.pdf" class="col-4 file-icon btn" download>
                            <i class="fas fa-file" id="file-normal"></i>
                            <i class="fas fa-file-download" id="file-hover"></i>
                        </a>
                        <div class="col-8">
                            <a href="./resources/files/da_ansuchen_core.pdf" download>
                                <h4 class="download-link">DA-Ansuchen</h4>
                            </a>
                            <p>CORE</p>
                        </div>
                    </div>

                    <div class="single-file col-12 col-lg-6 row">
                        <a href="./resources/files/da_ansuchen_sphere.pdf" class="col-4 file-icon btn" download>
                            <i class="fas fa-file" id="file-normal"></i>
                            <i class="fas fa-file-download" id="file-hover"></i>
                        </a>
                        <div class="col-8">
                            <a href="./resources/files/da_ansuchen_sphere.pdf" download>
                                <h4 class="download-link">DA-Ansuchen</h4>
                            </a>
                            <p>SPHERE</p>
                        </div>
                    </div>

                    <div class="single-file col-12 col-lg-6 row">
                        <a href="" class="col-4 file-icon btn" download>
                            <i class="fas fa-file" id="file-normal"></i>
                            <i class="fas fa-file-download" id="file-hover"></i>
                        </a>
                        <div class="col-8">
                            <a href="" download>
                                <h4 class="download-link">DA-Antrag TODO</h4>
                            </a>
                            <p>CORE</p>
                        </div>
                    </div>

                    <div class="single-file col-12 col-lg-6 row">
                        <a href="" class="col-4 file-icon btn" download>
                            <i class="fas fa-file" id="file-normal"></i>
                            <i class="fas fa-file-download" id="file-hover"></i>
                        </a>
                        <div class="col-8">
                            <a href="" download>
                                <h4 class="download-link">DA-Antrag TODO</h4>
                            </a>
                            <p>SPHERE</p>
                        </div>
                    </div>
                </div>



            </div>
            <footer class="d-flex justify-content-center">
                <div class="row col-10 col-lg-10">
                    <div class="col-12 col-lg-4 text-lg-right d-flex flex-column justify-content-center">
                        <p><a href="./impressum.html">Impressum</a></p>
                        <p><a href="./datenschutz.html">Datenschutzerklärung</a></p>
                    </div>
                    <div class="col-12 col-lg-4">
                        <img src="./assets/images/ATLAS_Text_White.svg" alt="ATLAS Schriftzug">
                    </div>
                    <div class="col-12 col-lg-4">
                        <p>Contact form taken from <a href="https://colorlib.com/wp/template/contact-form-v6/">colorlib.</a></p>
                        <p>Copyright © 2020 All Rights Reserved</p>
                    </div>
                </div>

            </footer>
        </section>
    </main>

	<svg class="cursor" width="25" height="25" viewBox="0 0 25 25">
		<circle class="cursor__inner" cx="12.5" cy="12.5" r="6.25"></circle>
	</svg>

    <script type="text/javascript" src="js/form.js"></script>
    <script type="module" src="js/spheres.js"></script>

    <script src="js/gsap-public/minified/gsap.min.js"></script>
    <script type="text/javascript" src="js/magneticButtons.js"></script>


</body>

</html>