
<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
     <title>Pointer Calci</title>
 </head>
<body>
<form method="GET" action="symechfs.php">
<div class="box">
<p style="text-align: center;font-size: 30px;"><u>SY MECH FS</u></p>
<?php
if(isset($_GET['submit'])){
   

    //grades for theory
    $som =$_GET['som'];
    $som1=4*$som;

    $at=$_GET['at'];
    $at1=4*$at;

    $mmm=$_GET['mmm'];
    $mmm1=4*$mmm;
    
    $em=$_GET['em'];
    $em1=3*$em;

    $mp=$_GET['mp'];
    $mp1=3*$mp;

    $hvpe=$_GET['hvpe'];
    $hvpe1=2*$hvpe;

    //grades for practicle

    $psom=$_GET['psom'];
    $pat=$_GET['pat'];
    $pmmm=$_GET['pmmm'];
    $pem=$_GET['pem'];
    $pmp=$_GET['pmp'];
      
      $tot=$som1+$at1+$mmm1+$em1+$mp1+$hvpe1+$psom+$pat+$pmmm+$pem+$pmp;

    $res=$tot/25;
     echo "<h1 >&nbsp&nbsp&nbsp&nbspCongratulations!!!</h1><br />";
    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspYour Pointer is:<b>  $res</b><br />";
    echo "<br /><h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspThank You!!</h3>";

      exit();
}
?>
    <div class="form-group">
   <p  style="text-align: center; font-size: 20px; "><b>Enter Obtained Theory Grades:</b></p>

<p style="text-align: center;">SOM:</p>
      <select class="form-control " id="sel1" name="som" >
   
        <option disabled selected>--Obtained Grade!--</option>
        <option value="10">A+</option>
        <option value="9">A</option>
        <option value="8">B+</option>
        <option value="7">B</option>
        <option value="6">C+</option>
        <option value="5">C</option>
        <option value="4">D</option>
        <option value="0">F</option>
        

      </select>
      <p style="text-align: center;"  >ATD:</p>
      <select class="form-control " id="sel1" name="at" >
   
        <option disabled selected>--Obtained Grade!--</option>
         <option value="10">A+</option>
        <option value="9">A</option>
        <option value="8">B+</option>
        <option value="7">B</option>
        <option value="6">C+</option>
        <option value="5">C</option>
        <option value="4">D</option>
        <option value="0">F</option>
        

      </select>
      <p style="text-align: center;" >MMM:</p>
      <select class="form-control " id="sel1" name="mmm" >
   
        <option disabled selected>--Obtained Grade!--</option>
         <option value="10">A+</option>
        <option value="9">A</option>
        <option value="8">B+</option>
        <option value="7">B</option>
        <option value="6">C+</option>
        <option value="5">C</option>
        <option value="4">D</option>
        <option value="0">F</option>
        
        

      </select>
      <p style="text-align: center;"  >EM:</p>
      <select class="form-control " id="sel1" name="em" >
   
        <option disabled selected>--Obtained Grade!--</option>
         <option value="10">A+</option>
        <option value="9">A</option>
        <option value="8">B+</option>
        <option value="7">B</option>
        <option value="6">C+</option>
        <option value="5">C</option>
        <option value="4">D</option>
        <option value="0">F</option>
        

      </select>
      <p style="text-align: center;"  >MP-1:</p>
      <select class="form-control " id="sel1"  name="mp">
   
        <option disabled selected>--Obtained Grade!--</option>
         <option value="10">A+</option>
        <option value="9">A</option>
        <option value="8">B+</option>
        <option value="7">B</option>
        <option value="6">C+</option>
        <option value="5">C</option>
        <option value="4">D</option>
        <option value="0">F</option>

      </select>
      <p style="text-align: center;" >HVPE:</p>
      <select class="form-control " id="sel1" name="hvpe" >
   
        <option disabled selected>--Obtained Grade!--</option>
         <option value="10">A+</option>
        <option value="9">A</option>
        <option value="8">B+</option>
        <option value="7">B</option>
        <option value="6">C+</option>
        <option value="5">C</option>
        <option value="4">D</option>
        <option value="0">F</option>
        

      </select><br /><br />
      <p style="text-align: center; font-size: 20px; "><b>Enter Obtained Practicle Grades:</b></p>
       <p style="text-align: center;">SOM:</p>
      <select class="form-control " id="sel1"   name="psom">
   
        <option disabled selected>--Obtained Grade!--</option>
        <option value="10">A+</option>
        <option value="9">A</option>
        <option value="8">B+</option>
        <option value="7">B</option>
        <option value="6">C+</option>
        <option value="5">C</option>
        <option value="4">D</option>
        <option value="0">F</option>
        

      </select>
       <p style="text-align: center;" >ATD:</p>
      <select class="form-control " id="sel1" name="pat" >
   
        <option disabled selected>--Obtained Grade!--</option>
         <option value="10">A+</option>
        <option value="9">A</option>
        <option value="8">B+</option>
        <option value="7">B</option>
        <option value="6">C+</option>
        <option value="5">C</option>
        <option value="4">D</option>
        <option value="0">F</option>

      </select>
       <p style="text-align: center;" >MMM:</p>
      <select class="form-control " id="sel1"  name="pmmm" >
   
        <option disabled selected>--Obtained Grade!--</option>
         <option value="10">A+</option>
        <option value="9">A</option>
        <option value="8">B+</option>
        <option value="7">B</option>
        <option value="6">C+</option>
        <option value="5">C</option>
        <option value="4">D</option>
        <option value="0">F</option>
        

      </select>
       <p style="text-align: center;" >EM:</p>
      <select class="form-control " id="sel1" name="pem">
   
        <option disabled selected>--Obtained Grade!--</option>
         <option value="10">A+</option>
        <option value="9">A</option>
        <option value="8">B+</option>
        <option value="7">B</option>
        <option value="6">C+</option>
        <option value="5">C</option>
        <option value="4">D</option>
        <option value="0">F</option>
        

      </select>
        </select>
       <p style="text-align: center;" >MP-1:</p>
      <select class="form-control " id="sel1" name="pmp">
   
        <option disabled selected>--Obtained Grade!--</option>
         <option value="10">A+</option>
        <option value="9">A</option>
        <option value="8">B+</option>
        <option value="7">B</option>
        <option value="6">C+</option>
        <option value="5">C</option>
        <option value="4">D</option>
        <option value="0">F</option>
        

      </select><br />
      <div class="wrapper"><input type="submit" class="btn btn-primary" value="Get Result!" name="submit" /> </div>
</form>
</div>
</body>
</html>