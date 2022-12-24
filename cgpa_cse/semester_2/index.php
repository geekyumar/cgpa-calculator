<?php

$name = $_POST['name'];
$grade_english = $_POST['english'];
$grade_maths = $_POST['maths'];
$grade_eg = $_POST['eg'];
$grade_beee = $_POST['beee'];
$grade_physics = $_POST['physics'];
$grade_c = $_POST['c'];
$grade_ep_lab = $_POST['ep_lab'];
$grade_c_lab = $_POST['c_lab'];



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


switch ($grade_eg)
{
  case "O":
    $eg = 10;
    break;

  case "A+":
      $eg = 9;
      break;

  case "A":
        $eg= 8;
        break;
      
        
  case "B+":
          $eg = 7;
          break;
      
          
  case "B":
            $eg = 6;
            break;

  case "C":
     $eg = 5;
      break;
  case "RA":
      $eg = 0;
   break;

  case "SA":
   $eg = 0;
   break;

   case "W":
     $eg = 0;
       break;
   }


   switch ($grade_beee)
{
  case "O":
    $beee = 10;
    break;

  case "A+":
      $beee = 9;
      break;

  case "A":
        $beee = 8;
        break;
      
        
  case "B+":
          $beee= 7;
          break;
      
          
  case "B":
            $beee = 6;
            break;

  case "C":
     $beee = 5;
      break;
  case "RA":
      $beee= 0;
   break;

  case "SA":
   $beee= 0;
   break;

   case "W":
     $beee = 0;
       break;
}

switch ($grade_physics)
{
  case "O":
    $physics= 10;
    break;

  case "A+":
    $physics = 9;
      break;

  case "A":
    $physics = 8;
        break;
      
        
  case "B+":
    $physics= 7;
          break;
      
          
  case "B":
    $physics= 6;
            break;

  case "C":
    $physics= 5;
      break;
  case "RA":
    $physics= 0;
   break;

  case "SA":
    $physics= 0;
   break;

   case "W":
    $physics = 0;
       break;

}


switch ($grade_c)
{
  case "O":
    $c= 10;
    break;

  case "A+":
    $c = 9;
      break;

  case "A":
    $c = 8;
        break;
      
        
  case "B+":
    $c= 7;
          break;
      
          
  case "B":
    $c= 6;
            break;

  case "C":
    $c= 5;
      break;
  case "RA":
    $c= 0;
   break;

  case "SA":
    $c= 0;
   break;

   case "W":
    $c = 0;
       break;

}




switch ($grade_ep_lab)
{
  case "O":
    $ep_lab = 10;
    break;

  case "A+":
    $ep_lab = 9;
      break;

  case "A":
    $ep_lab = 8;
        break;
      
        
  case "B+":
    $ep_lab= 7;
          break;
      
          
  case "B":
    $ep_lab = 6;
            break;

  case "C":
    $ep_lab= 5;
      break;
  case "RA":
    $ep_lab= 0;
   break;

  case "SA":
    $ep_lab= 0;
   break;

   case "W":
    $ep_lab = 0;
       break;


}


switch ($grade_c_lab)
{
  case "O":
    $c_lab = 10;
    break;

  case "A+":
    $c_lab  = 9;
      break;

  case "A":
    $c_lab  = 8;
        break;
      
        
  case "B+":
    $c_lab  = 7;
          break;
      
          
  case "B":
    $c_lab  = 6;
            break;

  case "C":
    $c_lab = 5;
      break;
  case "RA":
    $c_lab  = 0;
   break;

  case "SA":
    $c_lab  = 0;
   break;

   case "W":
    $c_lab = 0;
       break;


}

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Semester II - CGPA Calculator</title>

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


      table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      
      <h2>Semester II CGPA Calculator</h2>
      <p class="lead">Enter your semester II CGPA details. All the inputs except your name is mandatory. Input your grades only (O, A+, A, B+, B, C). If arrear, Click "RA"</p>
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
              <label name = "english" for="username" class="form-label">HS3251 Professional English-II</label></span>
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
                Please provide a valid input.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">MA3251 Statistics and Numerical Methods</label> 
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
              Please provide a valid input.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">GE3251 Engineering Graphics</label>
              <select name = "eg" class="form-select" id="country" required>
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
              Please provide a valid input.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">BE3251 Basics of EEE</label>
              <select name = "beee"  class="form-select" id="country" required>
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
              <label for="country" class="form-label">PH3256 Physics for Information Science</label>
                <select name = "physics"  class="form-select" id="country" required>
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
              Please provide a valid input.
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">CS3251 Programming in C</label> 
              <select name = "c" class="form-select" id="country" required>
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
              Please provide a valid input.
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">GE3271 Engineering Practices Laboratory</label> 
              <select name = "ep_lab" class="form-select" id="country" required>
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
              Please provide a valid input.
              </div>
    </div>

              <div class="col-12">
              <label for="email" class="form-label">CS3271 Programming in C Laboratory</label> 
              <select name = "c_lab" class="form-select" id="country" required>
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
              Please provide a valid input.
              </div>
            </div>


        <br>
        <br>

          <button class="w-100 btn btn-primary btn-lg" type="submit">Calculate my CGPA!</button>
        </form>
      </div>
    </div>
  </main>




<?
  if (isset($_POST['english']) and
($_POST['maths']) and
($_POST['eg']) and
($_POST['beee']) and
($_POST['physics']) and
($_POST['c']) and
($_POST['ep_lab']) and
($_POST['c_lab'] ))

{

  ?>

<br>
<br>


<table>
<tr>
  <th>Subjects</th>
  <th>Given Grades</th>
  <th>Corresponding marks</th>
</tr>
<tr>
  <td>HS3251 Professional English - II</td>
  <td><?echo $grade_english?></td>
  <td><?echo $english?></td>
</tr>
<tr>
  <td>MA3251 Statistics and Numerical Methods</td>
  <td><?echo $grade_maths?></td>
  <td><?echo $maths?></td>
</tr>
<tr>
  <td>GE3251 Engineering Graphics</td>
  <td><?echo $grade_eg?></td>
  <td><?echo $eg?></td>
</tr>
<tr>
  <td>BE3251 Basics of EEE</td>
  <td><?echo $grade_beee?></td>
  <td><?echo $beee?></td>
</tr>
<tr>
  <td>PH3256 Physics for Information Science</td>
  <td><?echo $grade_physics?></td>
  <td><?echo $physics?></td>
</tr>
<tr>
  <td>CS3251 Programming in C</td>
  <td><?echo $grade_c?></td>
  <td><?echo $c?></td>
</tr>
<tr>
  <td>GE3271 Engineering Practices Laboratory</td>
  <td><?echo $grade_ep_lab?></td>
  <td><?echo $ep_lab?></td>
</tr>

<tr>
  <td>CS3271 Programming in C Laboratory</td>
  <td><?echo $grade_c_lab?></td>
  <td><?echo $c_lab?></td>
</tr>
</table>

<br>
<br>


<?
$result =(($english*2) + ($maths*4) + ($eg*4) + ($beee*3) + ($physics*3) +
($c*3) + ($ep_lab*2) + ($c_lab*2) )/23;

?>
<h5 class= "text-center"><?echo "Hello $name, Your CGPA for Semester II is: $result"?></h5>



<?}?>

    



  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; Site Crafted, maintained and developed by <a href="httpa://umar.selfmade.one">Umar Farooq</a>.</p>
  </footer>
</div>


    <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
