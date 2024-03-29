<?php 

include "db_conn.php";

if (isset($_POST['full_name']) && isset($_POST['mobile']) && isset($_POST['email']) && isset($_POST['designation']) 
    && isset($_POST['manager'])) {


    function validate($data)
    {

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }
    function GetBand($value)
    {
        if($value == 'Software Engineer' || $value == 'QA' || $value == 'IT Consultant' || $value == 'Finance Consultant')
            return 1;
        elseif ($value == 'Lead Engineer' ||  $value == 'Lead QA') {
            return 2;
        } 
        elseif ($value == 'Engineering Manager' ) {
            return 3;
        }  
        elseif ($value == 'Engineering Director' ) {
            return 4;
        } 
        elseif ($value == 'Vice President' ) {
            return 5;
        } 
        elseif ($value == 'CTO' ) {
            return 6;
        }
        else{
            return 7;
        }
        return -1;                        
    }

    $name = validate($_POST['full_name']);
    $mobile = validate($_POST['mobile']);
    $email = validate($_POST['email']);
    $designation = validate($_POST['designation']);
    $manager = validate($_POST['manager']);
    $pass = "qwerty";
    $band = GetBand($designation);
    $emp_type="employee";
    if($band === -1){
        echo "sfsdfsdfsd1";
        die();
        header("Location: add_employee.php?error= Unkown designation");
        exit();
    }

    if (empty($name)) {
        echo "sfsdfsdfsd2";
        die();
        header("Location: add_employee.php?error= Name is required");
        exit();
    }else if(empty($mobile)){
                echo "sfsdfsdfsd3";
        die();
        header("Location: add_employee.php?error=Mobile is required");
        exit();

    }else if(empty($designation)){
        echo "sfsdfsdfsd4";
        die();
        header("Location: add_employee.php?error=Mobile is required");
        exit();

    }else if(empty($email)){
        echo "sfsdfsdfsd5";
        die();
        header("Location: add_employee.php?error=Mobile is required");
        exit();

    }else if(empty($manager)){
        echo "sfsdfsdfsd6";
        die();
        header("Location: add_employee.php?error=Mobile is required");
        exit();

    }else{
        $prevId = 0;
        $query = "SELECT * FROM Employee WHERE id = ( SELECT MAX(id) FROM Employee )";

        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            $prevId = $row['id'];
            $prevId = $prevId + 1;
        } else {
            // There is now row
            $prevId=2; // Start from 2 as 1 is aleready for admin
        }
        $sql = "INSERT INTO Employee VALUES($prevId,'$name','$email','$pass','$designation',$band,'$mobile','$manager')";
        $result = mysqli_query($conn, $sql);

        // Insert into user
        $querry="INSERT INTO users VALUES($prevId,'$name','$email','$pass','$emp_type')";
        mysqli_query($conn, $querry);
        header("Location: home_admin.php");
        mysqli_close($conn);
    }

}else{
    header("Location: add_employee.php");
    exit();
}
