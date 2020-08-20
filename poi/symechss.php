
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
<form method="GET" action="symechss.php">
<div class="box">
<p style="text-align: center;font-size: 30px;"><u>SY MECH FS</u></p>
<?php
if(isset($_GET['submit'])){
   

    //grades for theory
    $m3 =$_GET['m3'];
    $m31=4*$m3;

    $tm=$_GET['tm'];
    $tm1=3*$tm;

    $fmhm=$_GET['fmhm'];
    $fmhm1=4*$fmhm;
    
    $mp2=$_GET['mp2'];
    $mp21=3*$mp2;

    $mdcad=$_GET['mdcad'];
    $mdcad1=2*$mdcad;

    $pc=$_GET['pc'];
    $pc1=2*$pc;

    //grades for practicle

    $pcp=$_GET['pcp'];
    $ppc=$_GET['ppc'];
    $pmdcad=$_GET['pmdcad'];
    $pmp2=$_GET['pmp2'];
    $pfmhm=$_GET['pfmhm'];
    $ptm=$_GET['ptm'];
      
      $tot=$m31+$tm1+$fmhm1+$mp21+$mdcad1+$pc1+$pcp+$ppc+$pmdcad+$pmp2+$pfmhm+$ptm;

    $res=$tot/24;
     echo "<h1 >&nbsp&nbsp&nbsp&nbspCongratulations!!!</h1><br />";
    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspYour Pointer is:<b>  $res</b><br />";
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
      <p style="text-align: center;"  >TM:</p>
      <select class="form-control " id="sel1" name="tm" >
   
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
      <p style="text-align: center;" >FM&ampHM:</p>
      <select class="form-control " id="sel1" name="fmhm" >
   
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
      <p style="text-align: center;"  >MP-2:</p>
      <select class="form-control " id="sel1" name="mp2" >
   
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
      <p style="text-align: center;"  >MD&ampCAD:</p>
      <select class="form-control " id="sel1"  name="mdcad">
   
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
        

      </select><br /><br />
      <p style="text-align: center; font-size: 20px; "><b>Enter Obtained Practicle Grades:</b></p>
       <p style="text-align: center;">CP:</p>
      <select class="form-control " id="sel1"   name="pcp">
   
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

      </select>
       <p style="text-align: center;" >MD&ampCAD:</p>
      <select class="form-control " id="sel1"  name="pmdcad" >
   
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
       <p style="text-align: center;" >MP-2:</p>
      <select class="form-control " id="sel1" name="pmp2">
   
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
     
       <p style="text-align: center;" >FM&ampHM:</p>
      <select class="form-control " id="sel1" name="pfmhm">
   
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
      <p style="text-align: center;" >TM:</p>
      <select class="form-control " id="sel1" name="ptm">
   
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