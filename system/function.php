<?php
class registration
{
    private $conn;

    public function __construct()
    {
        #database host, database user, database pass, database name
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = "";
        $dbname = 'royal_cyber';

        $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

        if (!$this->conn) {
            die("Database Connection Error!!");
        }
    }


    public function register($data)
    {
        // Get form data

        // Retrieve form data from $_POST superglobal array
        $name = $data['name'];
        $username = $data['username'];
        $email = $data['email'];
        $phone = $data['phone'];
        $password = $data['password'];
        $confirm_password = $data['confirm_password'];

        // Validate input
        $errors = [];

        if (empty($name)) {
            $errors[] = "Name is required.";
        }

        if (empty($username)) {
            $errors[] = "Username is required.";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Email is not valid.";
        }

        if (!preg_match("/^[0-9]{11}$/", $phone)) {
            $errors[] = "Phone number is not valid.";
        }

        if (empty($password)) {
            $errors[] = "Password is required.";
        } elseif (strlen($password) < 6) {
            $errors[] = "Password must be at least 6 characters long.";
        }

        if ($password !== $confirm_password) {
            $errors[] = "Passwords do not match.";
        }

        // Check if there are any errors
        if (count($errors) > 0) {
            $_SESSION['name'] = $data['name'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['phone'] = $data['phone'];
            $_SESSION['password'] = $data['password'];
            $_SESSION['confirm_password'] = $data['confirm_password'];
            // store other form values as needed

            // Display the validation errors to the user
            // Display error messages to the user
            foreach ($errors as $error) {
                echo "<p>$error</p>";
            }
        } else {
            // Submit the form data to the database or perform other actions
            // Unset the session variables to clear the form data
            unset($_SESSION['name']);
            unset($_SESSION['username']);
            unset($_SESSION['email']);
            unset($_SESSION['phone']);
            unset($_SESSION['password']);
            unset($_SESSION['confirm_password']);
            // unset other session variables as needed
            // Hash the password using PHP's built-in password_hash function
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insert the user's data into the database
            $stmt = $this->conn->prepare("INSERT INTO registration (name, username, email, phone, password) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $name, $username, $email, $phone, $hashed_password);

            if ($stmt->execute()) {
                echo "Registration successful!";
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
            $this->conn->close();
        }
    }

public function login($data){

// Get form data

    // Retrieve form data from $_POST superglobal array
        $email = $data['email'];
        $password = $data['password'];

    // Validate input
        $errors = [];

        if (empty($email)) {
            $errors[] = "Email is required.";
        }

        if (empty($password)) {
            $errors[] = "Password is required.";
        }
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        var_dump($hashed_password);
    // Check if email and password match a user in the database
        $query = "SELECT * FROM registration WHERE email='$email' AND password='$password'";
        $result = mysqli_query($this->conn, $query);
        print_r($result);

        if (mysqli_num_rows($result) == 1) {
            // User found, set session variable and redirect to dashboard
                $_SESSION['email'] = $email;
                header("Location: dashboard.php");
                exit();
        } else {
            // User not found, display error message
                $errors[] = "Invalid email or password.";
        }

    // If there were errors, return them as a string
        if (!empty($errors)) {
            return implode("<br>", $errors);
        }
    }
}


    // public function display_data(){
    //     $query = "SELECT * FROM students";
    //     if(mysqli_query($this->conn, $query)){
    //         $returndata = mysqli_query($this->conn, $query);
    //         return $returndata;
    //     }
    // }
    // public function display_data_by_id($id){
    //     $query = "SELECT * FROM students WHERE id=$id";
    //     if(mysqli_query($this->conn, $query)){
    //         $returndata = mysqli_query($this->conn, $query);
    //         $studentData = mysqli_fetch_assoc($returndata);
    //         return $studentData;
    //     }
    // }

    // public function update_data($data){
    //     $std_name = $data['u_std_name'];
    //     $sub_name = $data['u_sub_name'];
    //     $idno = $data['std_id'];
    //     $std_img = $_FILES['u_std_img']['name'];
    //     $tmp_name = $_FILES['u_std_img']['tmp_name'];

    //     $query = "UPDATE students SET std_name='$std_name', sub_name='$sub_name', stg_img='$std_img' WHERE id=$idno";

    //     if(mysqli_query($this->conn, $query)){
    //         move_uploaded_file($tmp_name, 'upload/'.$std_img);
    //         return "Information Updated Successfully!";
    //     }
    // }

    // public function delete_data($id){
    //     $catch_img = "SELECT * FROM students WHERE id=$id";
    //     $delete_std_info = mysqli_query($this->conn, $catch_img);
    //     $std_infoDle = mysqli_fetch_assoc($delete_std_info);
    //     $deleteImg_data = $std_infoDle['stg_img'];
    //     $query = "DELETE FROM students WHERE id=$id";
    //     if(mysqli_query($this->conn, $query)){
    //         unlink('upload/'.$deleteImg_data);
    //         return "Deleted Successfully";
    //     }
    // }

