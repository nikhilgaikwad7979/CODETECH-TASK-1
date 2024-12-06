<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <style>
    a:visited { color: black; text-decoration: none; }
  </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center mt-5">
    <div class="card w-75 shadow-lg shadow-success">
        <div class="card-body text-center bg-light ">
            <h3 class="text-dark  ">Signup</h3><hr>
    
        </div>  
        <form action="login.php" method="post">
                    <div class="card-body bg-light">
                    <div class="form-group">
                            <label for="name"><b>Name</b></label>
                            <input type="text"  class="form-control" name="name" placeholder="Enter your Name" >
                        </div>
                        <div class="form-group">
                            <label for="number"><b>Number</b></label>
                            <input type="tel"  class="form-control" name="number" placeholder="Enter your Mobile Number" >
                        </div>
                        <div class="form-group">
                            <label for="email"><b>Email</b></label>
                            <input type="email"  class="form-control" name="email" placeholder="Enter your email address" >
                        </div>
                    

                        <div class="form-group">
                            <label for="password"><b>Password</b></label>
                            <input type="password" id="password" class="form-control" name="password" placeholder="Enter your password" >
                        </div>
                        
                       
                        <div class="row justify-content-end">
                            <div class="col-auto">
                                  <button type="submit" name="Signup" class="btn btn-success">SignUp</button>
                            </div>
                          <div class="col-auto">
                            <a href="login.php"> <button type="login" name="submit" class="btn btn-success">Login</button> <a>
                            </div>
                 </div>
       </div>
      </form>
    </div>
</div>

<style>
    .shadow-success {
        box-shadow: 0 0.5rem 2rem rgba(570, 55, 79, 0.5) !important;
    }
    
</style>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php 
 if(isset($_POST['Signup'])){
    $name = $_POST['name'];
    $email = $_POST['eamail'];   
    $password = $_POST['password'];
    $number = $_POST['number'];
    $query="INSERT INTO users (name,email,password,number) values ('$name','$email','$password',$number)";  
    $data=mysqli_query($con, $query); 
    if($data){
        echo "hii";
    }
}

?>








