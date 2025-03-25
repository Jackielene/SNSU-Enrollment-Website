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

    <!--COR--->
    <div class="container content-container">
        <h3 class="text-center fw-bold">CERTIFICATE OF REGISTRATION</h3>
        
        <!-- Student Information -->
        <div class="border mt-5 p-3 mb-4">
            <h5 class="fw-bold">Student Information</h5>
            <p><strong>Student Name:</strong> Juan Dela Cruz</p>
            <p><strong>Gender:</strong> Male</p>
            <p><strong>Student ID:</strong> 2023123456</p>
            <p><strong>Program:</strong> Bachelor of Science in Information Technology</p>
            <p><strong>Year Level:</strong> 3</p>
            <p><strong>Academic Year</strong>2024-2025</p>
            <p><strong>Status:</strong> Regular</p>
        </div>
        
        <!-- Enrolled Subjects -->
        <h5 class="fw-bold">Enrolled Subjects</h5>
        <div class="table-responsive">
        <table class="table table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>Subject Code</th>
                    <th>Subject Title</th>
                    <th>Units</th>
                    <th>Instructor</th>
                    <th>Section</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>IT201</td>
                    <td>Web Development</td>
                    <td>3</td>
                    <td>Prof. Maria Santos</td>
                    <td>IT 2A</td>
                </tr>
                <tr>
                    <td>IT202</td>
                    <td>Database Management</td>
                    <td>3</td>
                    <td>Prof. Jose Ramirez</td>
                    <td>IT 2A</td>
                </tr>
                <tr>
                    <td>IT203</td>
                    <td>Computer Networks</td>
                    <td>3</td>
                    <td>Prof. Anna Cruz</td>
                    <td>IT 2A</td>
                </tr>
                <tr>
                    <td>IT204</td>
                    <td>Software Engineering</td>
                    <td>3</td>
                    <td>Prof. Mark Villanueva</td>
                    <td>IT 2A</td>
                </tr>
                <tr>
                    <td>IT205</td>
                    <td>Operating Systems</td>
                    <td>3</td>
                    <td>Prof. Karen Diaz</td>
                    <td>IT 2A</td>
                </tr>
                <tr>
                    <td>IT206</td>
                    <td>Cybersecurity Fundamentals</td>
                    <td>3</td>
                    <td>Prof. John Dela Cruz</td>
                    <td>IT 2A</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="fw-bold text-end">Total Units:</td>
                    <td>18</td>
                </tr>
            </tfoot>
        </table>
    </div>

    
    <!-- Approval Section -->
    <div class="border p-3 mt-4 mb-5">
        <h5 class="fw-bold">Approval Section</h5>
        <p><strong>Date Issued:</strong> March 3, 2025</p>
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