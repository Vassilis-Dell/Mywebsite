<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Account has been created successfully</title>
    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/form.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2">
                    <a href="http://localhost/mywebsite/"><img alt="English Premier League" width="150" height="150" src="images/pl-main-logo.png" class="rounded-circle" /></a>
                </div>
                <div class="col-md-10">
                    <div class="page-header">
                        <h1>Premier League </h1>
                    </div>
                    <h3>No room for racism</h3>
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sign-in.html">Sign in</a>
                        </li>
                       
                        <li class="nav-item dropdown ml-md-auto">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Premier League</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="table.html">Tables</a> <a class="dropdown-item" href="https://www.premierleague.com/fixtures">Fixtures</a> <a class="dropdown-item" href="https://www.premierleague.com/results">Results</a>
                                <div class="dropdown-divider"></div> <a class="dropdown-item" href="https://www.premierleague.com/news">News</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <img alt="your account" src="images/your_account.png">
            <br><br>
            <center><h2>Account has been created successfully</h2></center>
            <hr>
            <br><br><br><br>
            <?php
			    // Step 1: Establish a connection to the MySQL database
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "myDataBase";

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
				  die("Connection failed: " . $conn->connect_error);
				}

                // Step 2: Retrieve form data using $_POST
				$fname = $_POST['fname'];
				$lname = $_POST['lname'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				$date_birth = $_POST['date_birth'];
				$country = $_POST['country'];
				$phone = $_POST['phone'];
				$sex = $_POST['sex'];
				$terms_of_use = isset($_POST['terms-of-use']) ? $_POST['terms-of-use'] : 'no';

                // Step 4: Construct SQL query
				$sql = "INSERT INTO MyGuests  (Firstname, Lastname, Email, Password, DOB, Country, Mobile, Gender, Terms_of_Use)
						VALUES ('$fname', '$lname', '$email', '$password', '$date_birth', '$country', '$phone', '$sex', '$terms_of_use')";

				if (isset($_POST['email'])) 
					if (isset($_POST['fname'])){
								
								echo "<center>Thanks for registering <b>$fname</b>. Please check the inbox of <b>$email</b> for a confirmation email allowing you to finish the process.</center>";
							}

                // Step 5: Execute SQL query
				if ($conn->query($sql) === TRUE) {
					echo "<center>Your private data has been stored to our database successfully.</center>";
				} else {
					echo "Error:Run B_i.php & B_ii.php first " . $sql . "<br>" . $conn->error;
				}

				// Step 6: Close database connection
				$conn->close();

            
            ?>
            <br><br><br><br><br>
            <hr>
            <br>
            <br>
            <center><a href="http://localhost/mywebsite/"><img src="images/Premier_League.jpg" border="4" style="color:white" alt="Premier League"></a></center>
            <center><b style="color:black; font-family:times new roman;">&copy;PREMIER LEAGUE 2023</b></center>
            <br><br>
        </div>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>