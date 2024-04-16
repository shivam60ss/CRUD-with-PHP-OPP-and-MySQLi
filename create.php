<?php
include 'header.php';


?>
<div class="card-body">
<form action="/action_page.php">
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
  </div>
  <div class="form-check mb-3">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
  <button type="submit" class="btn btn-primary">Delete</button>
  <a class="btn btn-primary" href="index.php">Go Back</a>

</form>
</div>

<?php
include 'footer.php';
?>