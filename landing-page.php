<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SNSU</title>

<!-- CSS -->
<link rel="stylesheet" href="./assets/css/style.css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

<!-- Bootstrap Icon CDN-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>
<body>

      <!--Preloader-->
      <div id="preloader">
        <span class="loader"></span>
      </div>


      <!---Navigation & Hero Section--->
      <section id="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="landing-page.php">
                        <img src="./assets/img/logo.png" alt="SNSU Logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 pe-5">
                            <li class="nav-item pe-5">
                                <a class="nav-link act" aria-current="page" href="landing-page.php">Home</a>
                            </li>
                            <li class="nav-item dropdown pe-5">
                                <a class="nav-link dropdown-toggle" href="#" id="classesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Classes
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="classesDropdown">
                                    <li><a class="dropdown-item" href="schedules.php">Schedules</a></li>
                                    <li><a class="dropdown-item" href="grades.php">Grades</a></li>
                                    <li><a class="dropdown-item" href="evaluation.php">Evaluation</a></li>
                                    <li><a class="dropdown-item" href="clearance.php">Clearance</a></li>
                                    <li><a class="dropdown-item" href="cor.php">COR</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown pe-5">
                                <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Profile
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                                    <li><a class="dropdown-item" href="profile.php">Account</a></li>
                                    <li><a class="dropdown-item" href="#">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Navbar content -->
            <div class="middle text-end">
              <h1 class="text-white display-3 fw-bold">
                  SNSU - Del Carmen Campus
              </h1>
              <span class="theme-text">For Nation's Greater Heights</span>
              <button class="explore-btn mt-3" id="exploreBtn">Explore our programs</button>
            </div>
        </div>
        <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1" d="M0,192L60,181.3C120,171,240,149,360,133.3C480,117,600,107,720,106.7C840,107,960,117,1080,122.7C1200,128,1320,128,1380,128L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
        </svg>
      </section>      

      <!---About Section-->
      <section id="about" class="about section">
    <div class="container" data-aos="fade-up">
      <div class="row g-0"> <!-- Bootstrap 5 uses g-0 instead of gx-0 for spacing -->

        <div class="col-lg-6 d-flex flex-column justify-content-center content-scroll" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h3>Who We Are</h3>
            <h2>Surigao del Norte State University (SNSU) Del Carmn Campus</h2>
            <p>
            is an institution dedicated to academic excellence, innovation, and community development. Offering diverse programs, SNSU equips students with the skills needed for global success while fostering sustainability and social responsibility.
            </p>
            <br>
            <div class="text-center text-lg-start">
              <a href="./assets/vid/video.mp4" class="btn btn d-inline-flex align-items-center justify-content-center">
                <span>Watch Video</span>
                <i class="bi bi-arrow-right ms-2"></i> <!-- Added ms-2 for Bootstrap 5 margin spacing -->
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-6 d-flex align-items-center">
          <video class="video-scroll" controls>
            <source src="./assets/vid/video.mp4" type="video/mp4">
          </video>
        </div>

      </div>
    </div>
      </section>


      <!-- Values Title -->
      <section id="values" class="values section">

      <!-- Section Title -->
      <div class="container section-title text-center" data-aos="fade-up">
        <h2 class="display-4 fw-bold">Our Core Values</h2>
        <p class="lead">What we value most</p>
      </div>

      <!-- Values Cards -->
      <div class="container values" data-aos="fade-up">
        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card h-100 border-0 text-center p-4" style="box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
              <img src="./assets/img/integrity.png" class="img-fluid mx-auto mb-3" alt="Integrity icon" style="max-width: 100px;">
              <h3>Integrity</h3>
              <p>We uphold the highest standards of honesty and ethics in all our actions and decisions.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card h-100 border-0 text-center p-4" style="box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
              <img src="./assets/img/competence.png" class="img-fluid mx-auto mb-3" alt="Competence icon" style="max-width: 100px;">
              <h3>Competence</h3>
              <p>We pursue excellence through continuous learning, innovation, and dedication.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card h-100 border-0 text-center p-4" style="box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
              <img src="./assets/img/respect.png" class="img-fluid mx-auto mb-3" alt="Respect icon" style="max-width: 100px;">
              <h3>Respect</h3>
              <p>We treat everyone with dignity, empathy, and understanding, fostering strong relationships.</p>
            </div>
          </div>

        </div>
      </div>

      </section>

      <!---Vision % Mission-->
      <div class="services section" id="services">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="service-item">
                <div class="icon">
                  <img src="./assets/img/vision.svg" alt="online degrees">
                </div>
                <div class="main-content">
                  <h4>Vision</h4>
                  <p>A Leading Industry-driven State University.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="service-item">
                <div class="icon">
                  <img src="./assets/img/mission.svg" alt="short courses">
                </div>
                <div class="main-content">
                  <h4>Mission</h4>
                  <p>To provide quality and inclusive education; establish industry and business innovation infrastructures; develop environmental initiatives; promote peace, justice and transformative leadership; and build strong and dynamic partnership with stakeholders.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="service-item">
                <div class="icon">
                  <img src="./assets/img/quality.svg" alt="web experts">
                </div>
                <div class="main-content">
                  <h4>Quality Policy</h4>
                  <p>Surigao del Norte State University provides quality instruction, research, extention programs, and production services to satisfy its customers by responding to their needs and expectations and continually improving its quality management system.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!---Programs-->
      <section id="tabs" class="tabs section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2 class="title-gradient">SNSU Offered Programs</h2>
          <p class="text-center">Explore our diverse academic programs designed to shape the future.</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <!-- Navigation Tabs -->
            <div class="col-lg-3">
              <ul class="nav nav-tabs flex-column">
                <li class="nav-item">
                  <a class="nav-link active" data-bs-toggle="tab" href="#tabs-tab-1">🎓 BS Ed</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-2">💻 BS Info Tech</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-3">⚙️ BTVTED</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-4">🌿 BS Agriculture</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-5">🐟 BS Fisheries</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-6">🏭 BS IT</a>
                </li>
              </ul>
            </div>

            <!-- Tab Content -->
            <div class="col-lg-9 mt-4 mt-lg-0">
              <div class="tab-content glass-container">
                <div class="tab-pane fade show active" id="tabs-tab-1">
                  <div class="details">
                    <h3>Bachelor of Secondary Education (Major in Science)</h3>
                    <p class="fst-italic">Preparing future educators with in-depth knowledge in science.</p>
                    <p>Our BS Ed program provides aspiring teachers with strong academic foundations and practical experience.</p>
                  </div>
                </div>
                <div class="tab-pane fade" id="tabs-tab-2">
                  <div class="details">
                    <h3>Bachelor of Science in Information Technology</h3>
                    <p class="fst-italic">Innovate the future with cutting-edge IT knowledge.</p>
                    <p>Master programming with our industry-aligned curriculum.</p>
                  </div>
                </div>
                <div class="tab-pane fade" id="tabs-tab-3">
                  <div class="details">
                    <h3>Bachelor of Technical Vocational Teacher Education</h3>
                    <p class="fst-italic">Shaping future vocational educators with hands-on expertise.</p>
                    <p>Empowering technical educators with industry-relevant skills and methodologies.</p>
                  </div>
                </div>
                <div class="tab-pane fade" id="tabs-tab-4">
                  <div class="details">
                    <h3>Bachelor of Agricultural Technology</h3>
                    <p class="fst-italic">Enhancing sustainable agricultural practices through innovative education.</p>
                    <p>Developing experts in modern farming and agribusiness solutions.</p>
                  </div>
                </div>
                <div class="tab-pane fade" id="tabs-tab-5">
                  <div class="details">
                    <h3>Bachelor of Science in Fisheries</h3>
                    <p class="fst-italic">Advancing marine science and sustainable fishery practices.</p>
                    <p>Equip yourself with the latest techniques in aquaculture and marine conservation.</p>
                  </div>
                </div>
                <div class="tab-pane fade" id="tabs-tab-6">
                  <div class="details">
                    <h3>Bachelor of Science in Industrial Technology</h3>
                    <p class="fst-italic">Master the art of industrial innovation.</p>
                    <p>Gain expertise in manufacturing, automation, and technical management.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  
      <!--Contact Us--->
        <div class="contact-us section" id="contact">
            <div class="container">
              <div class="row">
                <div class="col-lg-6  align-self-center">
                  <div class="section-heading">
                    <h6>Contact Us</h6>
                    <h2>Feel free to contact us anytime</h2>
                    <p>Thank you for choosing SNSU - Del Carmen Campus</p>
                    <div class="special-offer">
                      <span class="offer">SNSU<br><em>DC</em></span>
                      <h6><em>For more inquries:</em></h6>
                      <h4>Send us a message</h4>
                      <a href="#"><i class="fa fa-angle-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="contact-us-content">
                    <form id="contact-form" action="" method="post">
                      <div class="row">
                        <div class="col-lg-12">
                          <fieldset>
                            <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                          </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                          </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <textarea name="message" id="message" placeholder="Your Message"></textarea>
                          </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <button type="submit" id="form-submit" class="orange-button">Send Message Now</button>
                          </fieldset>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <!-- Footer Section -->
        <footer>
          <div class="container">
            <div class="footer-content">
              <p>Copyright © 2025 Surigao del Norte State University. All rights reserved.</p>
              <div class="social-icons">
              <a href="https://www.facebook.com/profile.php?id=61570924711511" class="icon"><i class="fab fa-facebook"></i></a>
              </div>
            </div>
          </div>
        </footer>


    <!-- Bootstrap JS -->
    <script src="./assets/js/bootstrap.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="./assets/js/script.js"></script>

    <!-- jQuery -->
    <script src="./assets/bootstrap/js/jquery-latest.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
    crossorigin="anonymous"></script>

    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
