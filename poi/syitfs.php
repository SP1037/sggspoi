
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
<form method="GET" action="syitfs.php">
<div class="box">
<p style="text-align: center;font-size: 30px;"><u>SY IT FS</u></p>
<?php
if(isset($_GET['submit'])){
   

    //grades for theory
    $dsd =$_GET['dsd'];
    $dsd1=3*$dsd;

    $ds=$_GET['ds'];
    $ds1=4*$ds;

    $oop=$_GET['oop'];
    $oop1=3*$oop;
    
    $hvpe=$_GET['hvpe'];
    $hvpe1=2*$hvpe;

    $dm=$_GET['dm'];
    $dm1=4*$dm;

    $edc=$_GET['edc'];
    $edc1=3*$edc;

    //grades for practicle

    $pad=$_GET['pad'];
    $pds=$_GET['pds'];
    $cl=$_GET['cl'];
    $cl1=2*$cl;
    $pdm=$_GET['pdm'];
    $poop=$_GET['poop'];
      
      $tot=$dsd1+$ds1+$oop1+$hvpe1+$dm1+$edc1+$pad+$pds+$cl1+$pdm+$poop;

    $res=$tot/25;
     echo "<h1 >Congratulations!!!</h1><br />";
    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspYour Pointer is:<b>  $res</b><br />";
    echo "<br /><h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspThank You!!</h3>";

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
      <p style="text-align: center;"  >DS:</p>
      <select class="form-control " id="sel1" name="ds" >
   
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
      <p style="text-align: center;" >OOP:</p>
      <select class="form-control " id="sel1" name="oop" >
   
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
      <p style="text-align: center;"  >HVPE:</p>
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
      <p style="text-align: center;" >EDC:</p>
      <select class="form-control " id="sel1" name="edc" >
   
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
       <p style="text-align: center;">A&ampD:</p>
      <select class="form-control " id="sel1"   name="pad">
   
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

         <p style="text-align: center;">DS:</p>
      <select class="form-control " id="sel1"   name="pds">
   
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
       <p style="text-align: center;" >OOP:</p>
      <select class="form-control " id="sel1" name="poop" >
   
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
      <select class="form-control " id="sel1"  name="cl" >
   
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
       <p style="text-align: center;" >DM:</p>
      <select class="form-control " id="sel1" name="pdm">
   
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