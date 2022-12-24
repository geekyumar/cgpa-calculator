<?php


$name = $_POST['name'];
$grade_dpco = $_POST['dpco'];
$grade_maths = $_POST['maths'];
$grade_dsa = $_POST['dsa'];
$grade_fds = $_POST['fds'];
$grade_oops = $_POST['oops'];
$grade_dsa_lab = $_POST['dsa_lab'];
$grade_oops_lab = $_POST['oops_lab'];
$grade_fds_lab = $_POST['fds_lab'];


switch ($grade_dpco)
{
  case "O":
    $dpco = 10;
    break;

  case "A+":
    $dpco = 9;
      break;

  case "A":
    $dpco= 8;
        break;
      
        
  case "B+":
    $dpco = 7;
          break;
      
          
  case "B":
    $dpco= 6;
            break;

  case "C":
    $dpco = 5;
      break;
  case "RA":
    $dpco= 0;
   break;

  case "SA":
    $dpco = 0;
   break;

   case "W":
    $dpco = 0;
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


switch ($grade_dsa)
{
  case "O":
    $dsa = 10;
    break;

  case "A+":
    $dsa  = 9;
      break;

  case "A":
    $dsa  = 8;
        break;
      
        
  case "B+":
    $dsa  = 7;
          break;
      
          
  case "B":
    $ds = 6;
     break;

  case "C":
    $ds  = 5;
      break;
  case "RA":
    $ds = 0;
   break;

  case "SA":
    $ds  = 0;
   break;

   case "W":
    $ds  = 0;
       break;
   }


   switch ($grade_fds)
{
  case "O":
    $fds = 10;
    break;

  case "A+":
    $fds = 9;
      break;

  case "A":
    $fds = 8;
        break;
      
        
  case "B+":
    $fds= 7;
          break;
      
          
  case "B":
    $fds = 6;
            break;

  case "C":
    $fds= 5;
      break;
  case "RA":
    $fds= 0;
   break;

  case "SA":
    $fds= 0;
   break;

   case "W":
    $fds = 0;
       break;
}

switch ($grade_oops)
{
  case "O":
    $oops= 10;
    break;

  case "A+":
    $oops = 9;
      break;

  case "A":
    $oops = 8;
        break;
      
        
  case "B+":
    $oops= 7;
          break;
      
          
  case "B":
    $oops= 6;
            break;

  case "C":
    $oops= 5;
      break;
  case "RA":
    $oops = 0;
   break;

  case "SA":
    $oops = 0;
   break;

   case "W":
    $oops= 0;
       break;

}



switch ($grade_dsa_lab)
{
  case "O":
    $dsa_lab= 10;
    break;

  case "A+":
    $dsa_lab = 9;
      break;

  case "A":
    $dsa_lab= 8;
        break;
      
        
  case "B+":
    $dsa_lab= 7;
          break;
      
          
  case "B":
    $dsa_lab = 6;
            break;

  case "C":
    $dsa_lab = 5;
      break;
  case "RA":
    $dsa_lab= 0;
   break;

  case "SA":
    $dsa_lab = 0;
   break;

   case "W":
    $dsa_lab = 0;
       break;


}

switch ($grade_oops_lab)
{
  case "O":
    $oops_lab= 10;
    break;

  case "A+":
    $oops_lab = 9;
      break;

  case "A":
    $oops_lab= 8;
        break;
      
        
  case "B+":
    $oops_lab= 7;
          break;
      
          
  case "B":
    $oops_lab = 6;
            break;

  case "C":
    $oops_lab = 5;
      break;
  case "RA":
    $oops_lab= 0;
   break;

  case "SA":
    $oops_lab = 0;
   break;

   case "W":
    $oops_lab = 0;
       break;

}

switch ($grade_fds_lab)
{
  case "O":
    $fds_lab= 10;
    break;

  case "A+":
    $fds_lab = 9;
      break;

  case "A":
    $fds_lab= 8;
        break;
      
        
  case "B+":
    $fds_lab= 7;
          break;
      
          
  case "B":
    $fds_lab = 6;
            break;

  case "C":
    $fds_lab = 5;
      break;
  case "RA":
    $fds_lab= 0;
   break;

  case "SA":
    $fds_lab = 0;
   break;

   case "W":
    $fds_lab = 0;
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
     
      <h2>Semester III CGPA Calculator</h2>
      <p class="lead">Enter your semester III CGPA details. All the inputs except your name is mandatory. Input your grades only (O, A+, A, B+, B, C). If arrear, Click "RA"</p>
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
              <label name = "english" for="username" class="form-label">CS3351 Digital Principles and Computer Organisation</label></span>
              <div class="input-group has-validation">
               
                <select name = "dpco" class="form-select" id="country" required>
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
              <label for="email" class="form-label">MA3354 Discrete Mathematics</label> 
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
              <label for="address" class="form-label">CD3291 Data Structures and Algorithms</label>
              <select name = "dsa" class="form-select" id="country" required>
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
              <label for="address2" class="form-label">CS3391 Object Oriented Programming (OOPS)</label>
              <select name = "oops"  class="form-select" id="country" required>
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
              <label for="country" class="form-label">CS3352 Foundations of Data Science</label>
                <select name = "fds"  class="form-select" id="country" required>
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
              <label for="email" class="form-label">CD3281 Data Structures and Algorithms Laboratory</label> 
              <select name = "dsa_lab" class="form-select" id="country" required>
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
              <label for="email" class="form-label">CS3381 OOPS Laboratory</label> 
              <select name = "oops_lab" class="form-select" id="country" required>
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
              <label for="email" class="form-label">CS3361 Data Science Laboratory</label> 
              <select name = "fds_lab" class="form-select" id="country" required>
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
  if (isset($_POST['dpco']) and
($_POST['maths']) and
($_POST['dsa']) and
($_POST['oops']) and
($_POST['fds']) and
($_POST['dsa_lab']) and
($_POST['oops_lab']) and
($_POST['fds_lab'] ))
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
  <td>CS3351 Digital Principles and Computer Organisation</td>
  <td><?echo $grade_dpco?></td>
  <td><?echo $dpco?></td>
</tr>
<tr>
  <td>MA3354 Discrete Mathematics</td>
  <td><?echo $grade_maths?></td>
  <td><?echo $maths?></td>
</tr>
<tr>
  <td>CD3291 Data Stuctures and Algorithms</td>
  <td><?echo $grade_dsa?></td>
  <td><?echo $dsa?></td>
</tr>
<tr>
  <td>CS3391 Object Oriented Programming</td>
  <td><?echo $grade_oops?></td>
  <td><?echo $oops?></td>
</tr>
<tr>
  <td>CS3352 Foundations of Data Science</td>
  <td><?echo $grade_fds?></td>
  <td><?echo $fds?></td>
</tr>
<tr>
  <td>CD3281 Data Structures and Algorithms Laboratory</td>
  <td><?echo $grade_dsa_lab?></td>
  <td><?echo $dsa_lab?></td>
</tr>
<tr>
  <td>CS3381 OOPS laboratory</td>
  <td><?echo $grade_oops_lab?></td>
  <td><?echo $oops_lab?></td>
</tr>

<tr>
  <td>CS3361 Data Science Laboratory</td>
  <td><?echo $grade_fds_lab?></td>
  <td><?echo $fds_lab?></td>
</tr>
</table>

<br>
<br>


<?
$result =(($dpco*4) + ($maths*4) + ($dsa*3) + ($oops*3) + ($fds*3) +
($dsa_lab*2) + ($oops_lab*1.5) + ($fds_lab*2) )/22.5;

?>
<h5 class= "text-center"><?echo "Hello $name, Your CGPA for Semester III is: $result"?></h5>


<?}?>



  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; Site Crafted, maintained and developed by <a href="https://umar.selfmade.one">Umar Farooq</a>.</p>
  </footer>
</div>


    <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
