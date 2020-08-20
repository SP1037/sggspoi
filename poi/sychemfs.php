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
<form method="GET" action="sychemfs.php">
<div class="box">
<p style="text-align: center;font-size: 30px;"><u>SY CHEMICAL FS</u></p>
<?php
if(isset($_GET['submit'])){
   

    //grades for theory
    $m3=$_GET['m3'];
    $m31=4*$m3;

    $apc=$_GET['apc'];
    $apc1=3*$apc;

    $fpm=$_GET['fpm'];
    $fpm1=4*$fpm;
    
    $cpc=$_GET['cpc'];
    $cpc1=4*$cpc;

    $cet1=$_GET['cet1'];
    $cet2=4*$cet1;

    $pc=$_GET['pc'];
    $pc1=2*$pc;

    //grades for practicle

    $papc=$_GET['papc'];
    $pfpm=$_GET['pfpm'];
    $ppc=$_GET['ppc'];
    
      
      $tot=$m31+$apc1+$fpm1+$cpc1+$cet2+$pc1+$papc+$pfpm+$ppc;

    $res=$tot/24;
     echo "<h1 >&nbsp&nbsp&nbsp&nbsp&nbspCongratulations!!!</h1><br />";
    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspYour Pointer is:<b>  $res</b><br />";
    echo "<br /><h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspThank You!!</h3>";

      exit();
}
?>
    <div class="form-group">
   <p  style="text-align: center; font-size: 20px; "><b>Enter Obtained Theory Grades:</b></p>
<p style="text-align: center;">M3:</p>
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
        

      </select>
      <p style="text-align: center;"  >APC:</p>
      <select class="form-control " id="sel1" name="apc" >
   
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
      <p style="text-align: center;" >FPM:</p>
      <select class="form-control " id="sel1" name="fpm" >
   
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
      <p style="text-align: center;"  >CPC:</p>
      <select class="form-control " id="sel1" name="cpc" >
   
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
      <p style="text-align: center;"  >CE Thermo-1:</p>
      <select class="form-control " id="sel1"  name="cet1">
   
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
      <select class="form-control " id="sel1" name="ppc" >
   
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
       <p style="text-align: center;">APC:</p>
      <select class="form-control " id="sel1"   name="papc">
   
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
       <p style="text-align: center;" >FPM:</p>
      <select class="form-control " id="sel1" name="pfpm" >
   
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
      <select class="form-control " id="sel1"  name="pc" >
   
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