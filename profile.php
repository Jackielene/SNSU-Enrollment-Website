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

    <!---Navbar-->
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

    <!---Student Infos-->
    <div class="container-wrapper">
    <div class="card shadow">
        <div class="card-header bg-success text-white text-center">
            <h3>Student Profile Information</h3>
        </div>
        <div class="card-body">
            <form id="profileForm">
                
                <!-- Student Profile Information -->
                <h5 class="fw-bold">Student Profile</h5>
                <div class="row g-3">
                    <div class="col-md-6"><label class="form-label">Name</label><input type="text" class="form-control profile-input" name="name" disabled></div>
                    <div class="col-md-6"><label class="form-label">Gender</label><select class="form-select profile-input" name="gender" disabled><option>Male</option><option>Female</option></select></div>
                    <div class="col-md-6"><label class="form-label">Student ID</label><input type="text" class="form-control profile-input" name="student_id" disabled></div>
                    <div class="col-md-6"><label class="form-label">Email</label><input type="email" class="form-control profile-input" name="email" disabled></div>
                    <div class="col-md-6"><label class="form-label">Phone Number</label><input type="text" class="form-control profile-input" name="phone" disabled></div>
                    <div class="col-md-6"><label class="form-label">Birth Date</label><input type="date" class="form-control profile-input" name="birth_date" disabled></div>
                    <div class="col-md-6"><label class="form-label">Place of Birth</label><input type="text" class="form-control profile-input" name="place_of_birth" disabled></div>
                    <div class="col-md-6"><label class="form-label">Religion</label><input type="text" class="form-control profile-input" name="religion" disabled></div>
                    <div class="col-md-6"><label class="form-label">Citizenship</label><input type="text" class="form-control profile-input" name="citizenship" disabled></div>
                    <div class="col-md-6"><label class="form-label">Home Address</label><input type="text" class="form-control profile-input" name="home_address" disabled></div>
                    <div class="col-md-6"><label class="form-label">Contact Person/Guardian</label><input type="text" class="form-control profile-input" name="guardian" disabled></div>
                    <div class="col-md-6"><label class="form-label">Person with Disability</label><select class="form-select profile-input" name="pwd" disabled><option>Yes</option><option>No</option></select></div>
                    <div class="col-md-6"><label class="form-label">Solo Parent</label><select class="form-select profile-input" name="solo_parent" disabled><option>Yes</option><option>No</option></select></div>
                </div>

                <!-- School Attended -->
                <h5 class="fw-bold mt-4">School Attended</h5>
                <div class="row g-3">
                    <div class="col-md-6"><label class="form-label">Elementary</label><input type="text" class="form-control profile-input" name="elementary" disabled></div>
                    <div class="col-md-6"><label class="form-label">Year Graduated</label><input type="text" class="form-control profile-input" name="elem_year" disabled></div>
                    <div class="col-md-6"><label class="form-label">Junior High</label><input type="text" class="form-control profile-input" name="junior_high" disabled></div>
                    <div class="col-md-6"><label class="form-label">Year Graduated</label><input type="text" class="form-control profile-input" name="jh_year" disabled></div>
                    <div class="col-md-6"><label class="form-label">Senior High</label><input type="text" class="form-control profile-input" name="senior_high" disabled></div>
                    <div class="col-md-6"><label class="form-label">Year Graduated</label><input type="text" class="form-control profile-input" name="sh_year" disabled></div>
                    <div class="col-md-6"><label class="form-label">College</label><input type="text" class="form-control profile-input" name="college" disabled></div>
                    <div class="col-md-6"><label class="form-label">Year Graduated</label><input type="text" class="form-control profile-input" name="college_year" disabled></div>
                </div>

                <!-- Parent's Information -->
                <h5 class="fw-bold mt-4">Parents Information</h5>
                <div class="row g-3">
                    <div class="col-md-6"><label class="form-label">Father's Name</label><input type="text" class="form-control profile-input" name="father_name" disabled></div>
                    <div class="col-md-6"><label class="form-label">Mother's Name</label><input type="text" class="form-control profile-input" name="mother_name" disabled></div>
                </div>

                <!-- Family & Social Environment -->
                <h5 class="fw-bold mt-4">Family and Social Environment</h5>
                <div class="row g-3">
                    <div class="col-md-6"><label class="form-label">Number of Persons Living at Home</label><input type="number" class="form-control profile-input" name="num_people_home" disabled></div>
                    <div class="col-md-6"><label class="form-label">Number of Siblings</label><input type="number" class="form-control profile-input" name="num_siblings" disabled></div>
                </div>

                <!-- Buttons -->
                <div class="btn-container mt-4">
                    <button type="button" class="btn btn-warning" id="editProfile">Edit</button>
                    <button type="button" class="btn btn-success d-none" id="saveProfile">Save</button>
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