<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS -->
  <link rel="stylesheet" href="./assets/css/pages.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

  <!-- Bootstrap Icon CDN-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.14/jspdf.plugin.autotable.min.js"></script>
  <title>SNSU</title>
</head>
<body>  

    <!---Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">

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

    <!-- Class Schedules Section -->
    <section class="container mt-5">
        <div class="text-center mb-4">
            <h2 class="text">Class Schedules</h2>
            <p class="text-muted">Find your weekly schedule with ease.</p>
        </div>

        <!-- Filters & Search -->
        <div class="row mb-4">
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="🔍 Search Subject, Instructor, or Room">
            </div>
            <div class="col-md-3">
                <select class="form-select">
                    <option>Select Semester</option>
                    <option>1st Semester</option>
                    <option>2nd Semester</option>
                </select>
            </div>
        </div>

        <!-- Weekly Schedules -->
        <div class="schedule-container">
        <h4 class="text-center text">Morning Classes</h4>
        <div class="table-responsive">
            <table class="table table-hover shadow-lg animated-table">
                <thead class="bg-success text-white">
                    <tr>
                        <th>Time</th>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                        <th>Saturday</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>7:00 - 8:00 AM</td>
                        <td>-</td>
                        <td>Math 101</td>
                        <td>-</td>
                        <td>Science 102</td>
                        <td>-</td>
                        <td>PE 101</td>
                    </tr>
                    <tr>
                        <td>8:00 - 9:00 AM</td>
                        <td>Math 101</td>
                        <td>-</td>
                        <td>English 101</td>
                        <td>-</td>
                        <td>Physics 101</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>9:00 - 10:00 AM</td>
                        <td>-</td>
                        <td>Science 202</td>
                        <td>-</td>
                        <td>History 201</td>
                        <td>-</td>
                        <td>IT 101</td>
                    </tr>
                    <tr>
                        <td>10:00 - 11:00 AM</td>
                        <td>English 102</td>
                        <td>-</td>
                        <td>Programming 101</td>
                        <td>-</td>
                        <td>Database 101</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>11:00 AM - 12:00 PM</td>
                        <td>-</td>
                        <td>History 102</td>
                        <td>-</td>
                        <td>Physics 201</td>
                        <td>-</td>
                        <td>Calculus 101</td>
                    </tr>
                    <tr>
                        <td>12:00 - 1:00 PM</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h4 class="text-center text mt-5">Afternoon Classes</h4>
        <div class="table-responsive">
            <table class="table table-hover shadow-lg animated-table">
                <thead class="bg-success text-white">
                    <tr>
                        <th>Time</th>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                        <th>Saturday</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1:00 - 2:00 PM</td>
                        <td>IT Fundamentals</td>
                        <td>-</td>
                        <td>Database 101</td>
                        <td>Physics 202</td>
                        <td>-</td>
                        <td>Calculus 201</td>
                    </tr>
                    <tr>
                        <td>2:00 - 3:00 PM</td>
                        <td>-</td>
                        <td>Networking 101</td>
                        <td>-</td>
                        <td>Web Development</td>
                        <td>-</td>
                        <td>Operating Systems</td>
                    </tr>
                    <tr>
                        <td>3:00 - 4:00 PM</td>
                        <td>Software Engineering</td>
                        <td>-</td>
                        <td>Algorithms</td>
                        <td>-</td>
                        <td>Cybersecurity</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>4:00 - 5:00 PM</td>
                        <td>-</td>
                        <td>Data Structures</td>
                        <td>-</td>
                        <td>AI & Machine Learning</td>
                        <td>-</td>
                        <td>Mobile Development</td>
                    </tr>
                    <tr>
                        <td>5:00 - 6:00 PM</td>
                        <td>Cloud Computing</td>
                        <td>-</td>
                        <td>Embedded Systems</td>
                        <td>-</td>
                        <td>Blockchain</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>6:00 - 7:00 PM</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>

        <!-- Print & Export Buttons -->
        <div class="text-center mt-4">
            <button class="btn btn-primary me-2" onclick="printSchedule()">
                <i class="bi bi-printer"></i> Print Schedule
            </button>
            <button class="btn btn-success" onclick="exportToPDF()">
                <i class="bi bi-file-earmark-pdf"></i> Export to PDF
            </button>
        </div>

    </section>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.13/jspdf.plugin.autotable.min.js"></script>

</body>
</html>