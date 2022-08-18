<?php
include 'connect.php';

session_start();
?>
<?php


if(isset($_POST['calc'])){
  
  $x = $_POST['num'];

  
  
}else{
  

 
  $x = -1;

}

 
function func($x){


 return $x**3 - 5* $x + 1;
}
# Derivative of the above function

function derivFunc($x){
 return 3*($x**2) - 5;
}
# Function to find the root
function newtonRaphson($x){

  if(!is_numeric($x)){

    echo'please insert VALID input';
  }else if($x > -1){

 $h = func($x) / derivFunc($x);
 $k=1;
 while (abs($h) >= 0.0005){
 $h = func($x)/derivFunc($x);

 # x(i+1) = x(i) - f(x) / f'(x)
 $x = $x - $h;
 echo ' &nbsp; &nbsp; f{'.$k.'} iteration value is {'.$x.'}<br>';
 $k=$k+1;
 }  

 echo'&nbsp; &nbsp; The value of the root is :  '.$x.'';

}

 }


function fibonacci($n){
 if($x > -1){
  $a = array_fill(0, $n, 0);
  $a[0] = 1;
  $a[1] = 1;

  for ($x = 2; $x <= $n; $x++) {
   $a[$x] = $a[$x -1 ] + $a[$x - 2];
   
    echo "&nbsp; &nbsp; $a[$x] <br>";
  }

 }

}


?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <!-- font awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

    <!-- // -->

    <div class ="row">
      <div class="col-md-12">
     
       
      
        <ol class="breadcrumb" style="background-color: blue; color:whitesmoke ">
          <il>&nbsp <span class="label" style="background-color: black;"><a href="index.php" style="color:whitesmoke"> HOME</a></span></il>
          <il>&nbsp &nbsp  &nbsp &nbsp <span class="label" style="background-color: black;"><a href="fibonacci.php" style="color:whitesmoke"> FIBONACCI</a></span></il>
          <il>&nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp <span class="label" style="background-color: black;"><a href="factorial.php" style="color:whitesmoke"> FACTORIAL</a></span></il>
          <il>&nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp <span class="label" style="background-color: black;"><a href="taylor.php" style="color:whitesmoke"> TAYLOR SERIES</a></span></il>
          <il>&nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp <span class="label" style="background-color: black;"><a href="newton.php" style="color:whitesmoke"> NEWTONS METHOD</a></span></il>

        </ol>

      

      </div>

     

    </div>

     <br>
     <br>    
   
    <title>MATH</title>
   
  </head>

  <body Style="background-color: ">
  
  
    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        
 
    <!--start of web body-->


  <div class= "container-fluid">  
     
<div  class= "row card  " style ="background-color: black; color:white;">
                      
  <br><br><br><br><br>
<!--first left column containing blogs -->
    <div class="col-md-12"> <h1 style="text-align:center">NEWTON METHOD FOR x^3 - 5x + 1 ( x - f(x)/f'(x))</h1></div>

        <br><br><br><br>
      
      <div class="col-md-12">

      
      <form class="form-horizontal" action="fibonacci.php" method="post"></form>


        <form class="form-horizontal" action="newton.php" method="post">
          
            <label class="control-label col-sm-2" for="num">Enter initial geuss x :</label>
            <div class="col-sm-10">
              <input type="input" class="form-control" name ="num" placeholder="enter number ">
              <button type="submit" name="calc" class="btn btn-default">calculate</button>
            </div>
            
          
        
       
         


         
        </form>

        ans : <br>
          
           <?php newtonRaphson($x);?>
      

    <br><br> <br><br><br><br>.

       
      </div>

  </div>

<br><br><br>.

<!-- Footer -->
<footer class="page-footer font-small ft">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a class ="footerfont" href="#!">Very long link 1</a>
          </li>
          <li>
            <a class ="footerfont" href="#!">Very long link 2</a>
          </li>
          <li>
            <a class ="footerfont"  href="#!">Very long link 3</a>
          </li>
         
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a class ="footerfont" href="#!" >Link 1</a>
          </li>
          <li>
            <a  class ="footerfont" href="#!">Link 2</a>
          </li>
          <li>
            <a  class ="footerfont" href="#!">Link 3</a>
          </li>
        
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a class ="footerfont" href="#!" >Link 1</a>
          </li>
          <li>
            <a  class ="footerfont" href="#!">Link 2</a>
          </li>
          <li>
            <a  class ="footerfont" href="#!">Link 3</a>
          </li>
         
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4 ">Links</h5>

        <ul class="list-unstyled ">
          <li>
            <a class ="footerfont" href="#!" >Link 1</a>
          </li>
          <li>
            <a  class ="footerfont" href="#!">Link 2</a>
          </li>
          <li>
            <a  class ="footerfont" href="#!">Link 3</a>
          </li>
         
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class=" row footer-copyright text-center py-3 " style="background-color: blue;">

    <div class="col-md-6">
    powered by:Sparex <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
    </div>

    <div class="col-md-3"></div>
 

    <div class= "col-md-3">
    <a  href="#" style="color:whitesmoke;"><i class="fa fa-facebook-official fa-1x"></i></a> &nbsp;&nbsp;
    <a  href="#" style="color:whitesmoke;"><i class="fa fa-twitter fa-1x"></i></a>&nbsp;&nbsp;
    <a  href="#" style="color:whitesmoke;"><i class="fa fa-instagram fa-1x" ></i></a>
    </div>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

</div>

</body>
<style>
.myImage{
width : 100%;
height: 250px;
border-color:  black;
border-width:20px;

}
span.myImage{

border :  black;
border-width:20px;

}
.links{
  color:whitesmoke
}

.bord{
    border: 30px solid  rgb(158, 15, 15);;
    padding:50px;
    background-color :black

  }


  .ft{
    background-color:#0d1e33;
  
    color: #cfa165 ;
    
  }

 .centerCon{

  align-content: center; 
 }

 table, th, td {
  border: 1px solid black;
}


.btn{
transition-duration: :0.4s;
color : white;
border: 1px solid white;
}

.btn:hover{
background-color: #BE9DEF;

}

.nav-link{
transition-duration: :0.4s;

}

.nav-link:hover{
  background-color:white;

}

.card-header{

background-color: #BE9DEF;
}


.a:hover{
  background-color:#BE9DEF;
}

.footerfont{

color:#b5d9d6;
}

</style>

</html>