<?php

session_start();

if (isset($_SESSION['name']) && isset($_SESSION['user_type'])) {

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>

    <link rel="stylesheet" type="text/css" href="admin_home.css">

</head>

<body>
     <div class="sidebar">
       <a class="active" href="home_admin.php">Home</a>
       <a href="add_employee.php">Add Employee</a>
       <a href="update_employee.php">Update Employee</a>
       <a href="delete_employee.php">Delete Employee</a>
       <a href="logout.php">Logout</a>
     </div>

    <div class="content_add_employee">
      <h2 align="center">Admin panel</h2>
      <h2>*Note : Band will be assigned based on designation</h2>
    <form id="add_employee" action="add_employee_to_db.php" method="post">
      <div id="personal-details">
        <table width="100%">
          <tr>
            <td>Full Name</td>
            <td>
              <input type="text" name="full_name" placeholder="Full Name" size="25">
            </td>
           
          </tr>
          <tr>
            <td>Mobile Number</td>
            <td>
              <input type="number" name="mobile" placeholder="9831****" size="25">
            </td>
            <td>Email Id</td>
            <td>
              <input type="text"  name="email" placeholder="your id@gmail.com" size="25">
            </td>
          </tr>
          <tr>
            <td>Designation</td>
            <td>
                <select name="designation">
                  <option selected disabled>Select Designation</option>
                  <option>Software Engineer </option>
                  <option>QA</option>
                  <option>Lead Engineer</option>
                  <option>Lead QA</option>
                  <option>Engineering Manager</option>
                  <option>Engineering Director</option>
                  <option>HR</option>  
                  <option>IT Consultant</option>  
                  <option>Finance Consultant</option>  
                  <option>CTO</option>  
                  <option>CEO</option>     
                </select>
            </td>
            <td>Reporting manager</td>
            <td>
              <input type="text"  name="manager" placeholder="email of reporting manager" size="25">
            </td>
          </tr>
        </table>

      </div>


      </table>
      <button type="submit">Save Info</button>

    </div>



  </form>

  


</div>
</body>
</html>

<?php

}else{

     header("Location: index.php");

     exit();

}

 ?>


