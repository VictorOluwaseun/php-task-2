<?php include_once("lib/header.php"); ?>
  <p> <strong>Register Form Here</strong> </p>
  <p>All Fields are required</p>
  <form action="processregister.php" method="POST">
    <p>
      <label for="">First Name</label> <br />
      <input type="text" name="first_name" placeholder = "First Name" id="">
    </p>

    <p>
      <label for="">Last Name</label> <br />
      <input type="text" name="last_name" placeholder = "Last Name" id="">
    </p>

    <p>
      <label for="">Email</label> <br />
      <input type="email" name="email" placeholder = "Email" id="">
    </p>
    <p>
      <label for="">Password</label> <br />
      <input type="password" name="password" placeholder = "password" id="">
    </p>
    <p>
      <label for="">Gender</label> <br />
      <select name="gender" id="">
        <option>Female</option>
        <option>Male</option>
      </select>
    </p>

    <hr /> 

    <p>
      <label for="">Designation</label> <br />
      <select name="designation" id="">
        <option>Medical Team (MT)</option>  
        <option>Patients</option>  
      </select>
    </p>

    <p>
      <label for="">Department</label> <br />
      <input type="text" name="department" id="" placeholder="Department">
    </p>

    <button type="submit">Register</button>
  </form>
<?php include_once("lib/footer.php");