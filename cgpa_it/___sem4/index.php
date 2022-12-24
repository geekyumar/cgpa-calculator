<?php

$name = $_POST['name'];
$grade_english = $_POST['english'];
$grade_maths = $_POST['maths'];
$grade_physics = $_POST['physics'];
$grade_chemistry = $_POST['chemistry'];
$grade_python = $_POST['python'];
$grade_python_lab = $_POST['python_lab'];
$grade_phyche_lab = $_POST['phy_che_lab'];



switch ($grade_english)
{
  case "O":
    $english = 10;
    break;

  case "A+":
      $english = 9;
      break;

  case "A":
        $english = 8;
        break;
      
        
  case "B+":
          $english = 7;
          break;
      
          
  case "B":
            $english = 6;
            break;

  case "C":
     $english = 5;
      break;
  case "RA":
      $english = 0;
   break;

  case "SA":
   $english = 0;
   break;

   case "W":
     $english = 0;
       break;


}


switch ($grade_maths)
{
  case "O":
    $maths = 10;
    break;

  case "A+":
      $maths = 9;
      break;

  case "A":
        $maths = 8;
        break;
      
        
  case "B+":
          $maths = 7;
          break;
      
          
  case "B":
            $maths = 6;
            break;

  case "C":
     $maths = 5;
      break;
  case "RA":
      $maths = 0;
   break;

  case "SA":
   $maths = 0;
   break;

   case "W":
     $maths = 0;
       break;

}


switch ($grade_physics)
{
  case "O":
    $physics = 10;
    break;

  case "A+":
      $physics = 9;
      break;

  case "A":
        $physics = 8;
        break;
      
        
  case "B+":
          $physics = 7;
          break;
      
          
  case "B":
            $physics = 6;
            break;

  case "C":
     $physics = 5;
      break;
  case "RA":
      $physics = 0;
   break;

  case "SA":
   $physics = 0;
   break;

   case "W":
     $physics = 0;
       break;
   }


   switch ($grade_chemistry)
{
  case "O":
    $chemistry = 10;
    break;

  case "A+":
      $chemistry = 9;
      break;

  case "A":
        $chemistry = 8;
        break;
      
        
  case "B+":
          $chemistry = 7;
          break;
      
          
  case "B":
            $chemistry = 6;
            break;

  case "C":
     $chemistry = 5;
      break;
  case "RA":
      $chemistry= 0;
   break;

  case "SA":
   $chemistry= 0;
   break;

   case "W":
     $chemistry = 0;
       break;
}

switch ($grade_phyche_lab)
{
  case "O":
    $phyche_lab = 10;
    break;

  case "A+":
    $phyche_lab = 9;
      break;

  case "A":
    $phyche_lab = 8;
        break;
      
        
  case "B+":
    $phyche_lab = 7;
          break;
      
          
  case "B":
    $phyche_lab = 6;
            break;

  case "C":
    $phyche_lab= 5;
      break;
  case "RA":
    $phyche_lab = 0;
   break;

  case "SA":
    $phyche_lab = 0;
   break;

   case "W":
    $phyche_lab = 0;
       break;

}



switch ($grade_python_lab)
{
  case "O":
    $python = 10;
    break;

  case "A+":
      $python = 9;
      break;

  case "A":
        $python = 8;
        break;
      
        
  case "B+":
          $python = 7;
          break;
      
          
  case "B":
            $python = 6;
            break;

  case "C":
     $python = 5;
      break;
  case "RA":
      $python = 0;
   break;

  case "SA":
   $python = 0;
   break;

   case "W":
     $python = 0;
       break;


}



if($_POST){
  echo("Maths mark is: $maths");
}

// echo $name;
// echo $english;
// echo $maths;
// echo $physics;
// echo $chemistry;
// echo $python;
// echo $python_lab;
// echo $phyche_lab;

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Semester III - CGPA Calculator</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/checkout/">

    

    

<link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
     
      <h2>Semester III CGPA Calculator</h2>
      <p class="lead">Enter your semester III CGPA details. Input your grades only (O, A+, A, B+, B, C). If arrear, Click "RA"</p>
    </div>

    <div class="d-flex justify-content-center">
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Enter your grades</h4>
        <form method= "post" class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Name <span class="text-muted">(Optional)</span></label>
              <input name = "name" type="text" class="form-control" id="firstName" placeholder="" value="">

            </div>

            <div class="col-12">
              <label name = "english" for="username" class="form-label">Professional English</label></span>
              <div class="input-group has-validation">
               
                <select name = "english" class="form-select" id="country" required>
                  <option value="">Choose...</option>
                  <option>O</option>
                  <option>A+</option>
                  <option>A</option>
                  <option>B+</option>
                  <option>B</option>
                  <option>C</option>
                  <option>RA</option>
                  <option>SA</option>
                  <option>W</option>
                </select>


                <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Matrices and Calculus</label> 
              <select name = "maths" class="form-select" id="country" required>
                <option value="">Choose...</option>
                <option>O</option>
                <option>A+</option>
                <option>A</option>
                <option>B+</option>
                <option>B</option>
                <option>C</option>
                <option>RA</option>
                <option>SA</option>
                <option>W</option>
              </select>
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Engineering Physics</label>
              <select name = "physics" class="form-select" id="country" required>
                <option value="">Choose...</option>
                <option>O</option>
                <option>A+</option>
                <option>A</option>
                <option>B+</option>
                <option>B</option>
                <option>C</option>
                <option>RA</option>
                <option>SA</option>
                <option>W</option>
                
              </select>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Engineering Chemistry</label>
              <select name = "chemistry"  class="form-select" id="country" required>
                <option value="">Choose...</option>
                <option>O</option>
                <option>A+</option>
                <option>A</option>
                <option>B+</option>
                <option>B</option>
                <option>C</option>
                <option>RA</option>
                <option>SA</option>
                <option>W</option>
              </select>
            </div>

            <div class="col-12">
              <label for="country" class="form-label">Problem Solving and Python Programming</label>
                <select name = "python"  class="form-select" id="country" required>
                  <option value="">Choose...</option>
                  <option>O</option>
                  <option>A+</option>
                  <option>A</option>
                  <option>B+</option>
                  <option>B</option>
                  <option>C</option>
                  <option>RA</option>
                  <option>SA</option>
                  <option>W</option>
                </select>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Physics and Chemistry Laboratory</label> 
              <select name = "phy_che_lab" class="form-select" id="country" required>
                <option value="">Choose...</option>
                <option>O</option>
                <option>A+</option>
                <option>A</option>
                <option>B+</option>
                <option>B</option>
                <option>C</option>
                <option>RA</option>
                <option>SA</option>
                <option>W</option>
              </select>
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Python Programming Laboratory</label> 
              <select name = "python_lab" class="form-select" id="country" required>
                <option value="">Choose...</option>
                <option>O</option>
                <option>A+</option>
                <option>A</option>
                <option>B+</option>
                <option>B</option>
                <option>C</option>
                <option>RA</option>
                <option>SA</option>
                <option>W</option>
              </select>
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>


        <br>
        <br>

          <button class="w-100 btn btn-primary btn-lg" type="submit">Calculate my CGPA!</button>
        </form>
      </div>
    </div>
  </main>



  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017–2022 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>


    <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
