<!--Erich Glenewinkel-->
<?php  
try //try catch to catch and display any errors that have occurred
{
    $connect=mysqli_connect("localhost","root","","loginprojectsun");              

} 
catch (Exception $ex) 
{
    echo "<script>alert('Connection to DB failed')</script>";
}
?>  