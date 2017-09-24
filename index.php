<?php
include 'lib/data-functions.php';
$student = array();
if (isset($_POST['name']))
{
    $student["name"]=$_POST["name"];
}
if (isset($_POST['email']))
{
    $student["email"]=$_POST["email"];
}
if (isset($_POST['nationality']))
{
    $student["nationality"]=$_POST["nationality"];
}
if (isset($_POST['address']))
{
    $student["address"]=$_POST["address"];
}
if (isset($_POST['gender']))
{
    $student["gender"]=$_POST["gender"];
}
insert_data ($student);
?>

<html>
<body>
    <form action="" method="post">
    Name: <input type="text" name="name" value=" ">
    
    Email: <input type="text" name="email" value=" ">
    
    Nationality: <input type="text" name="nationality" value=" ">
    
    Address: <textarea name="address" rows="5" cols="40">&nbsp;</textarea>
    
    Gender:
    <input type="radio" name="gender"
    value="female" checked="true">Female
    <input type="radio" name="gender"
    value="male">Male 

    Submit:
    <input type="submit" value="Submit"/>
</form>
</body>
</html>
