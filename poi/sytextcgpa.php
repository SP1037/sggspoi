
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
<form method="GET" action="sytextcgpa.php">
<div class="box">
<p style="text-align: center;font-size: 30px;"><u>SY TEXTIL GGPA</u></p>
<?php
if(isset($_GET['submit'])){
   

    //grades for theory
    $sem1=$_GET['sem1'];
    $sem12=22*$sem1;

    $sem2=$_GET['sem2'];
    $sem21=24*$sem2;

   
      $tot=$sem12+$sem21;

    $res=$tot/46;
     echo "<h1 >&nbsp&nbsp&nbsp&nbsp&nbspCongratulations!!!</h1><br />";
    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspYour Pointer is:<b>  $res</b><br />";
    echo "<br /><h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspThank You!!</h3>";

      exit();
}
?>
   <div class="input-group mb-3">
  <div class="input-group-prepend">
    <button class="btn btn-outline-secondary" type="button" id="button-addon1">First Sem</button>
  </div>
  <input type="tel" class="form-control" placeholder="Enter Sem_1 Pointer" aria-label="Example text with button addon" aria-describedby="button-addon1" name="sem1">
</div>

 <div class="input-group mb-3">
  <div class="input-group-prepend">
    <button class="btn btn-outline-secondary" type="button" id="button-addon1">Second Sem</button>
  </div>
  <input type="tel" class="form-control" placeholder="Enter Sem_2 Pointer" aria-label="Example text with button addon" aria-describedby="button-addon1" name="sem2">
</div>


<div class="wrapper"><input type="submit" class="btn btn-primary" value="Get Pointer!" name="submit" /> </div>


   </div></form>
</body>
</html>