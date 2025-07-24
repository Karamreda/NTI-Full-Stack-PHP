<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
  .navbar-custom {
    background-color: #212529; 
    padding: 10px 20px;
  }

  .navbar-custom .navbar-brand,
  .navbar-custom .nav-link {
    color: #ffffff !important;
    font-weight: 500;
    transition: 0.3s ease-in-out;
  }

  .navbar-custom .nav-link:hover {
    color: #ffc107 !important; 
  }

  .navbar-custom .nav-link.active {
    border-bottom: 2px solid #ffc107;
  }

  .navbar-toggler {
    background-color: #fff;
  }
</style>

<nav class="navbar navbar-expand-lg navbar-custom shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">Training System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" href="../students/students.php">Students</a>
        <a class="nav-link" href="../courses/courses.php">Courses</a>
        <a class="nav-link" href="../enrollments/enrollments.php">Enrollments</a>
      </div>
    </div>
  </div>
</nav>
