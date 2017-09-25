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
    Name: <input type="text" name="name" value=" "><br>
    
    Email: <input type="text" name="email" value=" "><br>
    
    Nationality: <select name="nationality">
        <option>Australian</option>
        <option>Chilean</option>
        <option>Czech</option>
        <option>Guatemalan</option>
        <option>Indonesian</option>
        <option>Irish</option>
        <option>Italian</option>
        <option>Portuguese</option>
        <option>Slovak</option>
        <option>Turkish</option>
        </select><br>
    
        
    Address: <textarea name="address" rows="5" cols="40">&nbsp;</textarea><br>
    
    Gender:
    <input type="radio" name="gender"
    value="female" checked="true">Female
    <input type="radio" name="gender"
    value="male">Male <br>

    Submit:
    <input type="submit" value="Submit"/>
</form>
</body>
</html>
