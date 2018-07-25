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
<!--SCREEN1-->
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Name</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="stylesheets/styles.css">
</head>

<body class="container">
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
<a class="navbar-brand" href="#">ConnectMe</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
</nav><br><br><br>
<em><p class="text-center"></p></em>
<div class="progress">
    <div class="progress-bar" style="width:20%">
    </div>
</div><br>
<section class="backgroundColor">
<form  method="post" action="screen2.php">
  <div class="form-group">
    <label for="firstname">First Name</label>
    <input class="form-control" id="firstname" type="text" name="firstname" required>
  </div>
  <div class="form-group">
      <label for="lastname">Last Name</label>
      <input class="form-control" id="lastname" type="text" name="lastname" required>
  </div>
  <div class="form-group">
    <label for="profile picture">Upload Profile Picture</label>
    <label class="btn btn-default"></label>
    <input class="profilepicture" id="profilepicturefile" name="profilepicturefile" type="file">
  </div>
  <div class="form-group">
    <label for="location">Location</label>
    <input class="form-control" id="location" type="text" name="location" required>
  </div>
  <div class="buttonHolder">
    <button type="submit" class="btn btn-primary" style="width:20%" id="submit">Next</button>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
</body>

</html>
