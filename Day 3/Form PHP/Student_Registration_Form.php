<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Student Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="direction: ltr; font-family: Arial;" class="bg-light">

  <div class="container mt-5">
    <h2 class="mb-4 text-center">📝 Student Registration Form</h2>

    <form class="row g-3 needs-validation" novalidate>
      <div class="col-md-6">
        <label for="fullname" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="fullname" required>
        <div class="invalid-feedback">Please enter your full name.</div>
      </div>

      <div class="col-md-6">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" class="form-control" id="email" required>
        <div class="invalid-feedback">Please enter a valid email address.</div>
      </div>

      <div class="col-md-4">
        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control" id="age" required min="1">
        <div class="invalid-feedback">Please enter your age.</div>
      </div>

      <div class="col-md-4">
        <label for="gender" class="form-label">Gender</label>
        <select class="form-select" id="gender" required>
          <option value="">Choose...</option>
          <option>Male</option>
          <option>Female</option>
        </select>
        <div class="invalid-feedback">Please select your gender.</div>
      </div>

      <div class="col-md-4">
        <label for="grade" class="form-label">Grade</label>
        <input type="number" class="form-control" id="grade" required min="0" max="100">
        <div class="invalid-feedback">Please enter a grade between 0 and 100.</div>
      </div>

      <div class="col-12">
        <label for="notes" class="form-label">Notes</label>
        <textarea class="form-control" id="notes" rows="2"></textarea>
      </div>

      <div class="col-12 text-center">
        <button class="btn btn-primary me-2" type="submit">Submit</button>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#studentsModal">
          View Students
        </button>
      </div>
    </form>
  </div>

  <div class="modal fade" id="studentsModal" tabindex="-1" aria-labelledby="studentsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="studentsModalLabel">📋 Student List</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table class="table table-bordered text-center">
            <thead class="table-dark">
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Grade</th>
                <th>Evaluation</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $students = [
                ["Karam Reda", "koko@example.com", 20, "Male", 95],
                ["Habiba Mohamed", "bibo@example.com", 22, "Female", 78],
                ["Amir Elmasry", "mero@example.com", 19, "Male", 50]
              ];

              foreach ($students as $s) {
                $grade = $s[4];
                if ($grade >= 90) $status = "Excellent";
                elseif ($grade >= 80) $status = "Very Good";
                elseif ($grade >= 70) $status = "Good";
                elseif ($grade >= 60) $status = "Pass";
                else $status = "Weak";

                echo "<tr>
                        <td>{$s[0]}</td>
                        <td>{$s[1]}</td>
                        <td>{$s[2]}</td>
                        <td>{$s[3]}</td>
                        <td>{$s[4]}</td>
                        <td>{$status}</td>
                      </tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    (() => {
      'use strict';
      const forms = document.querySelectorAll('.needs-validation');
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    })();
  </script>

</body>

</html>
