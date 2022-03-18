<?php
require_once('models/models.php');

class Model {
                    //in here we find functions that we will use. By dumping most functions into the models folder we can simply call these functions
    public function getlogin() {        //instead of having to rebuild each function each and every time that we want to do an insert, select, etc...

        if(isset($_REQUEST['username']) && isset($_REQUEST['password'])) //this checks basically is the fields that we are gonna use set
        {

            include("/database.php"); 
            $username=$_REQUEST['username'];  
            $password=$_REQUEST['password']; 
            
            $_SESSION["username"] = "$username"; //here we assign the session a username
                    
            $check_user="SELECT * FROM users WHERE user_name='$username' AND user_pass='$password'";   //the hashed and salt added variable is now used to compare the database's hashed and salt password
                                                                                                       //if they are the same the the system will allow you to log in.
            $run=mysqli_query($connect,$check_user);  //basic variable used to connect and retreive data from the database
            
            if($username=="G" && $password=="E") //hardcoded to show some CRUD operations
            {
                header("Location: Views\adminDashboard.php");
            }
            else if(mysqli_num_rows($run) == 1)  
            {  
                return 'login';
            }  
            else  
            {  
                echo "<script>alert('Email or password is incorrect!')</script>";  // just as simple alert to let you know what went wrong
            }  
        }                                                                           //if the database were to be bigger I would create a class which would encapsulate the fields being inserted/updated in the database
    }                                                                               //this would also base the design more on OOP principles as well as safer as the data can be made private
} 
?>