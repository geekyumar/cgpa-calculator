<?php

$name = $_POST['name'];
$cgpa = $_POST['cgpa'];
$no_of_sem = $_POST['no_of_sem'];
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Overall CGPA Calculator</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/checkout/">

    

    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

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

      <h2>Overall CGPA Calculator</h2>
      <p class="lead">Enter your CGPA marks from each semester to calculate Overall CGPA. All the inputs except your name is mandatory. If arrear, Click "RA"</p>
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
              <label name = "english" for="username" class="form-label">Enter your CGPA's calculated from each semester (followed by +)</label></span> 
              <div class="input-group has-validation">
              <input name = "cgpa" type="text" class="form-control" id="firstName" placeholder="" value="" required>


                <div class="invalid-feedback">
                  Please provide valid input.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label name = "english" for="username" class="form-label">Enter number of semesters you are about to calculate</label></span>
              <div class="input-group has-validation">
              <input name = "no_of_sem" type="text" class="form-control" id="firstName" placeholder="" value="" required>


                <div class="invalid-feedback">
                Please provide valid input.
                </div>
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
  if (isset($_POST['cgpa']) and
($_POST['no_of_sem'])
)

{

  $str = '37 - 0';
  eval( '$a = (' . $cgpa. ');' );
  
  $result = $a / $no_of_sem;

  
?>



<h5 class= "text-center"><?echo "Hello $name, Your Overall CGPA for $no_of_sem Semesters is: $result"?></h5>

    <?}?>





  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; Site Crafted, maintained and developed by <a href="https://umar.selfmade.one">Umar Farooq</a></p>

  </footer>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
