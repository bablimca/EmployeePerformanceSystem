<?php

session_start();

if (isset($_SESSION['name']) && isset($_SESSION['user_type'])) {

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>

    <link rel="stylesheet" type="text/css" href="employee_home.css">

</head>

<body>
     <div class="sidebar">
       <a class="active" href="home_employee.php">Home</a>
       <a href="rate_ur_self.php">Rate your self</a>
       <a href="rate_team.php">Rate team members</a>
       <a href="#updateInfo">Update info</a>
       <a href="logout.php">Logout</a>
     </div>

    <div class="rate_ur_self">
      <h2 align="center">Rate your self</h2>
      <h3> Please rate your self from 1 to 5 (1 : lower, 5 : higher)</h3>
    <form id="rate_ur_self" action="sumbit_self_rating.php" method="post">
      <div id="rating_details">
        <table width="100%">
          <tr>
            <td>Goals & Achievements</td>
            <td>
              <input type="textarea" name="goals" placeholder="Write goals & Achievements">
                </select>
                    <select name="goal_rating">
                    <option selected disabled> select from 1 to 5</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>     
                </select>
            </td> 
          </tr>
          <tr>
            <td>Strengths</td>
            <td>
              <input type="textarea" name="Strengths" placeholder="Write Strengths" >
                  </select>
                    <select name="strengths_rating">
                    <option selected disabled> select from 1 to 5</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>     
                  </select> 
            </td>

          </tr>
          <tr>
            <td>Skills</td>
            <td>
                <select name="skills" multiple>
                  <option selected disabled>Select your skills(You can select multiple)</option>
                  <option value="C_C++">C/C++</option>
                  <option value="ds">Data structure</option>
                  <option value="algos">Algorithms</option>
                  <option value="web">Web Developemnt</option>
                  <option value="db">Database</option> 
                </select>
                    <select name="skill_rating">
                    <option selected disabled> select from 1 to 5</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>     
                </select> 
            </td>
          </tr>
          <tr>
            <td>Overall Summary</td>
            <td>
              <input type="textarea" name="Strengths" placeholder="Write comments" >
                  <select name="overall rating">
                    <option selected disabled> select from 1 to 5</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>     
                </select>
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

     header("Location: home_employee.php");

     exit();

}

?>
