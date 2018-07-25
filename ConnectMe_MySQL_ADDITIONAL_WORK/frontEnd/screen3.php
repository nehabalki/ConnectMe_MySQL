<?php
session_start();
if(isset($_SESSION["user_Id"])) {
  echo "Your session is running " . $_SESSION["user_Id"];
}
else{
  header("Location: index.html");
}
?>
<!DOCTYPE html>
<!--SCREEN3-->
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Name</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="stylesheets/styles.css">
</head>

<body class="container">
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <a class="navbar-brand" href="#">ConnectMe</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  </nav><br><br><br><br><br>
  <em><p class="text-center"></p></em>
  <div class="progress center-block">
    <div class="progress-bar" style="width:60%"></div>
  </div><br>
  <section class="backgroundColor">
    <form method="post" action="screen5.php">
      <div class="form-group">
        <center>
          <h4>Please enter your profession(s)</h4></center>
        <input type="text" name="profession" class="form-control" id="profession" placeholder="For example: Doctor, Software Engineer">
      </div><br>

      <input type="hidden" name="firstname" id="firstname" value="<?php echo $_POST['firstname']; ?>">

<input type="hidden" name="lastname" id="lastname" value="<?php echo $_POST['lastname']; ?>">

<input type="hidden" name="profilepicturefile" id="profilepicturefile" value="<?php echo $_POST['profilepicturefile']; ?>">

<input type="hidden" name="location" id="location" value="<?php echo $_POST['location']; ?>">

<input type="hidden" name="interesta" id="interesta" value="<?php echo $_POST['interesta']; ?>">

<input type="hidden" name="interestb" id="interestb" value="<?php echo $_POST['interestb']; ?>">

<input type="hidden" name="interestc" id="interestc" value="<?php echo $_POST['interestc']; ?>">

<input type="hidden" name="interestd" id="interestd" value="<?php echo $_POST['interestd']; ?>">

<input type="hidden" name="intereste" id="intereste" value="<?php echo $_POST['intereste']; ?>">


      <div class="buttonHolder">
        <button id="nextbutton" type="submit" class="btn btn-primary" style="width:20%">Next</button>
      </div>
    </form>
    <footer class="page-footer fixed-bottom font-small">
      <div class="container">
        <div class="row text-center d-flex flex-nowrap justify-content-center pt-5 mb-3">
          <div class="col-md-2 mb-3">
            <h6 class="text-uppercase font-weight-bold">
            <a href="#!">Help</a>
          </h6>
          </div>
          <div class="col-md-2 mb-3">
            <h6 class="text-uppercase font-weight-bold">
            <a href="#!">Terms</a>
          </h6>
          </div>
          <div class="col-md-2 mb-3">
            <h6 class="text-uppercase font-weight-bold">
            <a href="#!">Privacy</a>
          </h6>
          </div>
          <div class="col-md-2 mb-3">
            <h6 class="text-uppercase font-weight-bold">
            <a href="#!">Contact Us</a>
          </h6>
          </div>
        </div>
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
          <label style="font-weight:normal;" for="footer">ConnectMe. All rights reserved.</label>
        </div>
      </div>
    </footer>
  </section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

</body>

</html>
