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
  <title>SNSU</title>
</head>
<body>


    <!--Navigation-->
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

    <!-- University Clearance Portal -->
    <div class="container">
    <div class="card shadow">
        <div class="card-header bg-success text-white text-center">
            <h3>University Clearance Portal</h3>
        </div>
        <div class="card-body">
            <form id="clearanceForm">
                <!-- Student Information -->
                <h5 class="fw-bold">Student Information</h5>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="Juan Dela Cruz" disabled>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Student ID</label>
                        <input type="text" class="form-control" name="student_id" value="2023123456" disabled>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Course</label>
                        <input type="text" class="form-control" name="course" value="Bachelor of Science in Computer Science" disabled>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Year Level</label>
                        <input type="text" class="form-control" name="year_level" value="4th Year" disabled>
                    </div>
                </div>
                
                <!-- Clearance Cards -->
                <h5 class="fw-bold mt-4">Clearance Status</h5>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="card p-3 shadow-sm">
                            <h6>Library</h6>
                            <span class="badge bg-success">✔ Cleared</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card p-3 shadow-sm">
                            <h6>Student Affairs Office</h6>
                            <span class="badge bg-warning">✖ Pending</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card p-3 shadow-sm">
                            <h6>PTEA</h6>
                            <span class="badge bg-success">✔ Cleared</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card p-3 shadow-sm">
                            <h6>Assessment Office</h6>
                            <span class="badge bg-warning">✖ Pending</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card p-3 shadow-sm">
                            <h6>Cashier</h6>
                            <span class="badge bg-success">✔ Cleared</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card p-3 shadow-sm">
                            <h6>Program Chair</h6>
                            <span class="badge bg-warning">✖ Pending</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card p-3 shadow-sm">
                            <h6>Academic Director</h6>
                            <span class="badge bg-success">✔ Cleared</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card p-3 shadow-sm">
                            <h6>Registrar</h6>
                            <span class="badge bg-warning">✖ Pending</span>
                        </div>
                    </div>
                </div>
            
            </form>
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
</body>
</html>