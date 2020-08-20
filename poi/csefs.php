
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
<form method="GET" action="csefs.php">
<div class="box">
<p style="text-align: center;font-size: 30px;"><u>SY CSE FS</u></p>
<?php
if(isset($_GET['submit'])){
   

    //grades for theory
    $dsd =$_GET['dsd'];
    $dsd1=3*$dsd;

    $be=$_GET['be'];
    $be1=3*$be;

    $java=$_GET['java'];
    $java1=3*$java;
    
    $pc=$_GET['pc'];
    $pc1=2*$pc;

    $dm=$_GET['dm'];
    $dm1=4*$dm;

    $m3=$_GET['m3'];
    $m31=4*$m3;

    //grades for practicle

    $pdsd=$_GET['pdsd'];
    $pjava=$_GET['pjava'];
    $web=$_GET['web'];
    $ppc=$_GET['ppc'];
      
      $tot=$dsd1+$be1+$java1+$pc1+$dm1+$m31+$pdsd+$pjava+$web+$ppc;

    $res=$tot/23;
     echo "<h1 >&nbsp&nbsp&nbsp&nbspCongratulations!!!</h1><br />";
    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspYour Pointer is:<b>  $res</b><br />";
    echo "<br /><h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspThank You!!</h3>";

      exit();
}
?>
    <div class="form-group">
   <p  style="text-align: center; font-size: 20px; "><b>Enter Obtained Theory Grades:</b></p>
<p style="text-align: center;">DSD:</p>
      <select class="form-control " id="sel1" name="dsd" >
   
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
      <p style="text-align: center;"  >BE:</p>
      <select class="form-control " id="sel1" name="be" >
   
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
      <p style="text-align: center;" >JAVA:</p>
      <select class="form-control " id="sel1" name="java" >
   
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
      <p style="text-align: center;"  >PC:</p>
      <select class="form-control " id="sel1" name="pc" >
   
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
      <p style="text-align: center;"  >DM:</p>
      <select class="form-control " id="sel1"  name="dm">
   
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
      <p style="text-align: center;" >M3:</p>
      <select class="form-control " id="sel1" name="m3" >
   
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
       <p style="text-align: center;">DSD:</p>
      <select class="form-control " id="sel1"   name="pdsd">
   
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
       <p style="text-align: center;" >JAVA:</p>
      <select class="form-control " id="sel1" name="pjava" >
   
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
       <p style="text-align: center;" >CL-1:</p>
      <select class="form-control " id="sel1"  name="web" >
   
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
       <p style="text-align: center;" >PC:</p>
      <select class="form-control " id="sel1" name="ppc">
   
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