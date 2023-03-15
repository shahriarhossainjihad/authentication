<?php
    include("system/function.php");

    $obj_registration = new registration();

    if(isset($_POST['register_info'])){
        $return_msg = $obj_registration->register($_POST);
        echo $return_msg;
    }

    // $students = $objCrudAdmin->display_data();

    // if(isset($_GET['status'])){
    //     if($_GET['status']='delete'){
    //         $delete_id = $_GET['id'];
    //         $delmsg =  $objCrudAdmin->delete_data($delete_id);
    //     }
    // }
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
                  <label for="name">Name:</label>
                  <input type="text" name="name" id="name" class="form-control" value="<?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ''; ?>" required>
                  <div class="invalid-feedback">Please enter your name.</div>
               </div>

               <div class="form-group">
                  <label for="username">Username:</label>
                  <input type="text" name="username" id="username" class="form-control" required value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>">
                  <div class="invalid-feedback">Please choose a username.</div>
               </div>
               <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" name="email" id="email" class="form-control" required value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>">
                  <div class="invalid-feedback">Please enter a valid email address.</div>
               </div>

               <div class="form-group">
                  <label for="phone">Phone Number:</label>
                  <input type="tel" name="phone" id="phone" class="form-control" required value="<?php echo isset($_SESSION['phone']) ? $_SESSION['phone'] : ''; ?>">
                  <div class="invalid-feedback">Please enter a valid phone number.</div>
               </div>

               <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" name="password" id="password" class="form-control" required value="<?php echo isset($_SESSION['password']) ? $_SESSION['password'] : ''; ?>">
                  <div class="invalid-feedback">Please enter a password.</div>
               </div>

               <div class="form-group">
                  <label for="confirm_password">Confirm Password:</label>
                  <input type="password" name="confirm_password" id="confirm_password" class="form-control" required value="<?php echo isset($_SESSION['confirm_password']) ? $_SESSION['confirm_password'] : ''; ?>">
                  <div class="invalid-feedback">Please confirm your password.</div>
               </div>

               <button type="submit" class="btn btn-primary my-2" name="register_info">Register</button>
            </form>


         </div>

      </div>
   </div>

</body>

</html>