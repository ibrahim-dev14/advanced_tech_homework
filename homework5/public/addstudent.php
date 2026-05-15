<?php
include_once 'includes/header.php';
include_once '../app/helpers/session_helper.php';
?>

<section class="add container-xxl shadow">

  <a href="index.php" style="font-size: 1.5rem;">
    <i class="fas fa-chevron-circle-left"></i>
  </a>

  <h2 class="text-center my-4">Adding A New Student</h2>

  <form class="row g-3" method="post" action="../app/Students.php">

    <input type="hidden" name="type" value="add">

    <?php flash('add') ?>

    <!-- First Name -->
    <div class="col-12">
      <label class="form-label">First Name</label>
      <input type="text" class="form-control" name="prenom" placeholder="M'hamed" required>
    </div>

    <!-- Last Name -->
    <div class="col-12">
      <label class="form-label">Last Name</label>
      <input type="text" class="form-control" name="nom" placeholder="Bouguerra" required>
    </div>

    <!-- Age -->
    <div class="col-md-6">
      <label class="form-label">Age</label>
      <input type="number" min="18" class="form-control" name="age" placeholder="18" required>
    </div>

    <!-- Email -->
    <div class="col-md-6">
      <label class="form-label">Email</label>
      <input type="email" class="form-control" name="email" placeholder="email_1@example.com" required>
    </div>

    <!-- Gender -->
    <div class="col-12">
      <label class="form-label">Gender</label>
      <select name="gender" class="form-control" required>
        <option value="">-- Select Gender --</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
    </div>

    <!-- Buttons -->
    <div class="col-12 d-grid gap-2 d-md-flex my-5">

      <button type="submit" class="btn btn-primary">
        <i class="fas fa-user-plus"></i>
        <span>Add Student</span>
      </button>

      <a href="index.php" class="btn btn-outline-danger" style="font-size: 1.2rem;">
        <i class="fas fa-times"></i>
        Cancel
      </a>

    </div>

  </form>

</section>

<?php
include_once 'includes/footer.php';
?>