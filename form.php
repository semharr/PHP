<?php 
$voornaam =""; 
$achternaam="";
$gebortedatum="";
$email =""; 
$opinion =""; 
$voornaamError ="";
$achternaamError="";
$gebortedatumError="";
$emailError ="";
$opinionError ="";
$successMessage =""; 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
if (empty($_POST["voornaam"])){
$voornaamError = "Naam is required";
echo "Name is required"."<br>";
}
else
 {
$voornaam = test_input($_POST["voornaam"]); 
echo $voornaam ."<br>";
 }
if (!preg_match("/^[a-zA-Z ]*$/",$voornaam))

{
$voornaamError = "Only letters and white space allowed";

}
} 
//achternaam

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if (empty($_POST["achternaam"]))
    {
    $achternaamError = "Naam is required";
    echo "Name is required"."<br>";
    }
    else
     {
    $achternaam = test_input($_POST["achternaam"]); 
    echo $achternaam ."<br>";
     }
    if (!preg_match("/^[a-zA-Z ]*$/",$achternaam))
    
    {
    $achternaamError = "Only letters and white space allowed";
    
    }
    } 
if (empty($_POST["email"]))
{
$emailError = "Email is required";
echo "Email is required"."<br>";
}
else
 {
$email = test_input($_POST["email"]);
echo $email."<br>";
} 


if (empty($_POST["opinion"]))
{
$opinionError = "opinion is required";
echo $opinionError."<br><br>";
}
else
 {
$opinion = test_input($_POST["opinion"]);
echo $opinion."<br><br>";
} 
if((!$name=='') && (!$email=='') && (!$opinion=='') )
{ 
$opinion_body = "you have submitted the form";
echo $opinion_body;
}
else
 {
echo "Form not submitted"."<br>";
} 

 // Function for filtering input values.
function test_input($data) {
$data = trim($data);
$data =stripslashes($data);
$data =htmlspecialchars($data);
return $data;
}
?>