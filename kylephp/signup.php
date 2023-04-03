<?php 
    $title ='Index';
    require_once 'includes/header.php';
    ?>

<!--- First name
 - Last name
 - Date of Birth (Use DatePicker)
 - Specialty (Database Admin, Software Developer, Web Administrator)
 - Email Address
 - Contact Number
-->
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
  </div>
<form>
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name">
    </div>
  </div>
</form>


<form action="/action_page.php">
  <label for="birthday">Birthday:</label>
  <input type="date" id="birthday" name="birthday">
  </form>

  

<div class="form-group col-md-4">
      <label for="inputState">Specialty</label>
      <select id="inputState" class="form-control">
        <option selected>Database Admin</option>
        <option selected>Software Developer</option>
        <option selected>Web Administrator</option>
        <option>...</option>
      </select>
    </div>

<div class="form-group col-md-4">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-5">
      <input type="email" class="form-control" id="colFormLabel" placeholder="Email Address">
    </div>
  </div>
  <div class="form-group col-md-4">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Contact Number</label>
    <div class="col-sm-5">
      <input type="email" class="form-control" id="colFormLabel" placeholder="Contact Number">
    </div>
  </div>
  <button type="submit" class="btn btn-primary btn-block">Submit</button>


<?php 
    
    require_once 'includes/footer.php';
    ?>