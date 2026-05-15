<?php
include_once '../app/Students.php';
$studentNumber = count($students);
?>

<main class="dashboard container p-5 rounded shadow">
  <h3>Table of your students</h3>

  <div class="add-container rounded-3">
    <p class="h5">
      Number Of Students:
      <?= '0' . $studentNumber; ?>
    </p>

    <a href="addstudent.php" class="btn btn-secondary" style="width:fit-content">
      <i class="fas fa-user-plus"></i>
      <span>Add Student</span>
    </a>
  </div>

  <table class="table table-hover">

    <thead>
      <tr class="table-dark">

        <th scope="col">
          <i class="fas fa-list-ol"></i>
        </th>

        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Age</th>
        <th scope="col">Gender</th>
        <th scope="col">E-mail</th>
        <th scope="col">Options</th>

      </tr>
    </thead>

    <tbody>

      <?php
      $n = 1;
      foreach ($students as $stud):
      ?>

      <tr>

        <th scope="row">
          <?= $n ?>
        </th>

        <td>
          <?= $stud['prenom'] ?>
        </td>

        <td>
          <?= $stud['nom'] ?>
        </td>

        <td>
          <?= $stud['age'] ?>
        </td>

        <td>
          <?= $stud['gender'] ?? '-' ?>
        </td>

        <td>
          <?= $stud['email'] ?>
        </td>

        <td>
          <div class="options" style="display:flex;justify-content: space-evenly;">

            <a href="updatestudent.php?udpateid=<?= $stud['id'] ?>"
              class="btn btn-primary">
              <i class="fas fa-user-edit"></i>
              Edit
            </a>

            <a href="../app/Students.php?deleteid=<?= $stud['id'] ?>"
              class="btn btn-danger">
              <i class="fas fa-user-minus"></i>
              Delete
            </a>

          </div>
        </td>

      </tr>

      <?php
      $n++;
      endforeach;
      ?>

    </tbody>

  </table>

</main>

<div class="push" style="height: 16px; margin: 16px;"></div>