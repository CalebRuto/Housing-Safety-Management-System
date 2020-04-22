<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$Username = $Password = "";
$Username_err = $Password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["Username"]);
    if(empty($input_name)){
        $Username_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $Username_err = "Please enter a valid name.";
    } else{
        $Username = $input_name;
    }
    
    // Validate Password
    $input_password = trim($_POST["Password"]);
    if(empty($input_password)){
        $Password_err = "Please enter a password.";     
    } else{
        $Password = $input_password;
    }
        
    // Check input errors before inserting in database
    if(empty($Username_err) && empty($Password_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO user_info (Username, Password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_address, $param_salary);
            
            // Set parameters
            $param_name = $Username;
            $param_Password = $Password;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($Username_err)) ? 'has-error' : ''; ?>">
                            <label>Name</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $Username; ?>">
                            <span class="help-block"><?php echo $Username_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($Password_err)) ? 'has-error' : ''; ?>">
                            <label>Password</label>
                            <textarea name="password" class="form-control"><?php echo $Password; ?></textarea>
                            <span class="help-block"><?php echo $Password_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>