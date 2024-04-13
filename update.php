<?php
include 'header.php';
?>
<div class="card-body">
<form action="/action_page.php">
  <div class="mb-3 mt-3">
    <label for="text" class="form-label">Name :</label>
    <input type="value" class="form-control" id="email" placeholder="Enter name" name="email">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Password:</label>
    <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Password:</label>
    <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
  </div>
  <div class="form-check mb-3">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="submit" class="btn btn-primary">Back</button>
</form>
</div>

<?php
include 'footer.php';
?>