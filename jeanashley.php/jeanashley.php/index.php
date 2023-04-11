<?php require_once 'includes/header.php' ?>
    <h1 class="text-center">Registration for IT Conference!</h1>
    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationCustom01" value="Ashley" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationCustom02" value="Caramihan" required>
    <div class="valid-feedback">
    </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputDate of Birth(Use Datepicker)" class="form-label">Date of Birth(Use DatePicker)</label>
    <input type="Date of Birth(Use datepicker)" class="form-control" id="exampleInputDate of Birth(use datePicker">
</div>
</form>
<form action='/action_page.php'>
    <label for="Date">Date of Birth:</label>
</form>
</div>
<div class="mb-3">
    <label for="exampleInputsSpiciality" class="form-label">Speciality</label>
    <input type="Spiciality" class="form-control" id="exampleInputSpeciality">
</div>
</form>
<form action='/action_page.php'>
    <label for="Speciality">speciality:</label>
</form>
</div>
<div class="mb-3">
    <label for="exampleInputsEmail Address" class="form-label">Email Address</label>
    <input type="Email Address" class="form-control" id="exampleInputEmail Address">
</div>
</form>
<form action='/action_page.php'>
    <label for="Email address">Email Address:</label>
</form>
</div>
<div class="mb-3">
    <label for="exampleInputsContact Number" class="form-label">Contact Number</label>
    <input type="Contact Number" class="form-control" id="exampleInputContact Number">
</div>
</form>
<form action='/action_page.php'>
    <label for="Contact Number">Contact Number:</label>
</form>
</div>
  <div class="col-md-4">
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php require_once 'includes/footer.php' ?>
