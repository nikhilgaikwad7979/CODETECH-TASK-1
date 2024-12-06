

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
        <div class="card-body text-center">
            <h3 class="text-dark">Login</h3>
        </div>
        <form action="login.php" method="post">
                    <div class="card-body bg-light">
                        <div class="form-group">
                            <label for="email"><b>Email</b></label>
                            <input type="email" id="email" class="form-control" name="email" placeholder="Enter your email address" required>
                        </div>

                        <div class="form-group">
                            <label for="password"><b>Password</b></label>
                            <input type="password" id="password" class="form-control" name="password" placeholder="Enter your password" required>
                        </div>
                        
                       
                        <div class="text-right md-3">
                        <a href="update.php"> <button type="submit" name="submit" class="btn btn-success">Login</button> <a>
                        </div>
                    </div>
                </form>
    </div>
</div>
<br>
<style>
    .shadow-success {
        box-shadow: 0 0.5rem 2rem rgba(70, 55, 379, 0.5) !important;
    }
</style>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>









