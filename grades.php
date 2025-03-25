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

    <!--Navbar-->
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

    <!--Grades-->

    <div class="content-wrapper">
            <!-- University Logo & Name -->
            <h3 class="text-center fw-bold">Surigao del Norte State University</h3>
        </div>

        <!-- Student Information -->
        <section class="container mt-4 p-4 bg-white shadow rounded">
            <h5>Student Information</h5>
            <p><strong>Name:</strong> Juan Dela Cruz</p>
            <p><strong>Gender:</strong> Male</p>
            <p><strong>Student ID:</strong> 202312345</p>
            <p><strong>Program:</strong> Bachelor of Science in Information Technology</p>
            <p><strong>Year Level:</strong> 3</p>
            <p><strong>Academic Year</strong> 2024-2025</p>
        </section>

        <!-- Select Semester -->
        <section class="container mt-3 p-3 bg-white shadow rounded">
            <label for="semester" class="form-label">Select Semester:</label>
            <select id="semester" class="form-select w-50">
                <option value="1st Sem">1st Semester</option>
                <option value="2nd Sem">2nd Semester</option>
            </select>
        </section>

        <!-- Grades Table -->
        <section class="container mt-3 p-3 bg-white shadow rounded">
        <h5>Grades Table</h5>
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead class="table-success">
                    <tr>
                        <th>Code</th>
                        <th>Subject Name</th>
                        <th>Units</th>
                        <th>Grade</th>
                        <th>Remarks</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>IT301</td><td>Web Development</td><td>3.0</td><td>89</td><td>Passed</td></tr>
                    <tr><td>IT302</td><td>Data Structures and Algorithm</td><td>3.0</td><td>92</td><td>Passed</td></tr>
                    <tr><td>IT303</td><td>Object Oriented Programming</td><td>3.0</td><td>85</td><td>Passed</td></tr>
                    <tr><td>IT304</td><td>Networking 1</td><td>3.0</td><td>80</td><td>Passed</td></tr>
                    <tr><td>IT305</td><td>Platform Technologies</td><td>3.0</td><td>88</td><td>Passed</td></tr>
                    <tr><td>IT306</td><td>Installation of Hardware and Software</td><td>3.0</td><td>90</td><td>Passed</td></tr>
                </tbody>
            </table>
        </div>
        <div class="text-center fw-bold mt-3">
            <strong>Semester GPA:</strong> <span>3.25</span> |
            <strong>Overall GPA:</strong> <span>3.21</span>
        </div>
        </section>


        <!-- Action Buttons -->
        <div class="container text-center mt-4">
            <button class="btn btn-primary me-md-2" onclick="printSchedule()">
                <i class="bi bi-printer"></i> Print Schedule
            </button>
            <button class="btn btn-success" onclick="exportGradesPDF()">
                <i class="bi bi-file-earmark-pdf"></i> Export to PDF
            </button>
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
    
</body>
</html>