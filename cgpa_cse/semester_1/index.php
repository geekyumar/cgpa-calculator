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

switch ($grade_python)
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
     $python= 0;
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
    $python_lab = 10;
    break;

  case "A+":
      $python_lab = 9;
      break;

  case "A":
        $python_lab = 8;
        break;
      
        
  case "B+":
          $python_lab = 7;
          break;
      
          
  case "B":
            $python_lab = 6;
            break;

  case "C":
     $python_lab = 5;
      break;
  case "RA":
      $python_lab = 0;
   break;

  case "SA":
   $python_lab = 0;
   break;

   case "W":
     $python_lab = 0;
       break;


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
    <title>Semester I - CGPA Calculator</title>

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

      <h2>Semester I CGPA Calculator</h2>
      <p class="lead">Enter your semester I CGPA details. All the inputs except your name is mandatory. Input your grades only (O, A+, A, B+, B, C). If arrear, Click "RA"</p>
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
              <label name = "english" for="username" class="form-label">HS3151 Professional English-I</label></span>
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
              <label for="email" class="form-label">MA3151 Matrices and Calculus</label> 
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
              <label for="address" class="form-label">PH3151 Engineering Physics</label>
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
              Please provide a valid input.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">CY3151 Engineering Chemistry</label>
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
              <label for="country" class="form-label">GE3151 Problem Solving and Python Programming</label>
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
              Please provide a valid input.
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">BS3171 Physics and Chemistry Laboratory</label> 
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
              Please provide a valid input.
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">GE3171 Python Programming Laboratory</label> 
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

  <br>
  <br>

<?
  if (isset($_POST['english']) and
($_POST['maths']) and
($_POST['physics']) and
($_POST['chemistry']) and
($_POST['python']) and
($_POST['python_lab']) and
($_POST['phy_che_lab'] ))

{

  ?>


<table>
<tr>
  <th>Subjects</th>
  <th>Given Grades</th>
  <th>Corresponding marks</th>
</tr>
<tr>
  <td>HS3151 Professional English-I</td>
  <td><?echo $grade_english?></td>
  <td><?echo $english?></td>
</tr>
<tr>
  <td>MA3151 Matrices and Calculus</td>
  <td><?echo $grade_maths?></td>
  <td><?echo $maths?></td>
</tr>
<tr>
  <td>PH3151 Engineering Physics</td>
  <td><?echo $grade_physics?></td>
  <td><?echo $physics?></td>
</tr>
<tr>
  <td>CY3151 Engineering Chemistry</td>
  <td><?echo $grade_chemistry?></td>
  <td><?echo $chemistry?></td>
</tr>
<tr>
  <td>GE3151 Problem Solving and Python Programming</td>
  <td><?echo $grade_python?></td>
  <td><?echo $python?></td>
</tr>
<tr>
  <td>BS3171 Physics and Chemistry Laboratory</td>
  <td><?echo $grade_phyche_lab?></td>
  <td><?echo $phyche_lab?></td>
</tr>
<tr>
  <td>GE3171 Python Laboratory</td>
  <td><?echo $grade_python_lab?></td>
  <td><?echo $python_lab?></td>
</tr>
</table>

<br>
<br>


<?
$result =(($english*3) + ($maths*4) + ($physics*3) + ($chemistry*3) + ($python*3) +
($phyche_lab*2) + ($python_lab*2) )/20;

?>
<h5 class= "text-center"><?echo "Hello $name, Your CGPA for Semester I is: $result"?></h5>



<?}?>

    





  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; Site Crafted, maintained and developed by <a href="https://umar.selfmade.one">Umar Farooq</a></p>

  </footer>
</div>


    <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
