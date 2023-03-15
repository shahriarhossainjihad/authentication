<?php include("system/function.php");

$obj_registration = new registration();

if (isset($_POST['register_info'])) {
    $return_msg = $obj_registration->register($_POST);
    echo $return_msg;
} elseif (isset($_POST['login_info'])) {
    $return_msg = $obj_registration->login($_POST);
    echo $return_msg;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Bootstrap Site</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>

<body>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <form action="#" method="post" class="needs-validation" novalidate>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" class="form-control" required>
          <div class="invalid-feedback">Please enter a valid email address.</div>
        </div>

        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" name="password" id="password" class="form-control" required>
          <div class="invalid-feedback">Please enter a password.</div>
        </div>

        <button type="submit" class="btn btn-primary my-2" name="login_info">Login</button>
      </form>
    </div>
  </div>
</div>

</body>

</html>