<?php
include 'connect.php';

session_start();
?>
<?php


if(isset($_POST['calc'])){
  
  $num = $_POST['num'];
  echo ".$num.'";
  
}else{
  

 
  $num = -1;

}

 




function factorial($n){

if(!is_numeric($n)){

     echo 'please insert VALID input';
  

}else if($n ==-1){

  return;

}else if($n <=1){

   return 1;

}else{
  return $n*factorial($n - 1);

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
          <il>&nbsp <span class="label" style="background-color: black;"><a href="#" style="color:whitesmoke"> HOME</a></span></il>
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
     
<div  class= "row card  " style ="background-color: white; color:black;">
                      
  
<!--first left column containing blogs -->


        <div class="col-md-12 card" style="text-align: center; background-color:black;color:white" >
          
           <h1 style="color:white">WELCOME TO OUR MATH PAGE</h1>  
           <br><br><br><br>
          
         <div class="col-md-4">
         <a href="index.php" style="color:white"> <button class="lifehacks"  name ="life_hacks"  formaction="index.php"></button><br>home</a>

         </div>

         <div class="col-md-4">
         <a href="fibonacci.php" style="color:white"> <button class="lifehacks"  name ="life_hacks"  formaction="fibonacci.php"></button><br>fibonacci</a>

       </div>

       <div class="col-md-4">
       <a href="factorial.php" style="color:white"> <button class="lifehacks"  name ="life_hacks"  formaction="factorial.php"></button><br>factorial</a>

     </div>

     <br><br><br><br><br>

     <div class="col-md-6">
     <a href="squareroot.php" style="color:white"> <button class="lifehacks"  name ="life_hacks"  formaction="squareroot.php"></button><br>squareroot</a>

   </div>

   <div class="col-md-6">
   <a href="password_gen.php" style="color:white"> <button class="lifehacks"  name ="life_hacks"  formaction="password_gen.php"></button><br>password Gen</a>

 </div>




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

.lifehacks{
border-radius: 50%;
background-color: blue;
padding:20px;
margin:8px 4px;
text-align: center;
align-content: center;

}

.socialcommon{
border-radius: 50%;
background-color: red;
padding:20px;
margin:8px 4px;
text-align: center;
align-content: center;

}

.productivity{
border-radius: 50%;
background-color: red;
padding:20px;
margin:8px 4px;
text-align: center;
align-content: center;
}

.selflove{
border-radius: 50%;
background-color: red;
padding:20px;
margin:8px 4px;
text-align: center;
align-content: center;
}

</style>

</html>