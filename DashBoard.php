
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Blog Application</title>
    <meta name="theme-color" content="#7952b3">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://getbootstrap.com/docs/5.0/examples/dashboard/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 bg-secondar" href="#">Blog Application</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      
    </div>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">

          <li class="nav-item">
      <div class="container d-flex justify-content-center align-items-center mt-0">
        <div class="card w-100 shadow-lg shadow-primary " >
            <div class="card-body text-left">        
        <a class="nav-link" id="#add" href="index.php">
            <i class="bi  bi-houses-fill"></i>  
                  DashBoard
            </a>
           </div>
    </div>
</div>
  </li>         
          <hr>

          <li class="nav-item">
          <div class="container d-flex justify-content-center align-items-center mt-0">
    <div class="card w-100 shadow-lg shadow-primary">
        <div class="card-body text-left">
        
        <a class="nav-link" id="#add" href="add.php">
            <i class="bi  bi-file-earmark-plus"></i>  
           Add  Blog
            </a>
            </div>
    </div>
</div>
</li>

<hr>

<li class="nav-item">
          <div class="container d-flex justify-content-center align-items-center mt-0">
    <div class="card w-100 shadow-lg shadow-primary">
        <div class="card-body text-left">
        
        <a class="nav-link" id="#add" href="update.php">
            <i class="bi  bi-file-plus"></i>  
           Edit  Blog
            </a>
            </div>
    </div>
</div>
</li>

<hr>

<li class="nav-item">
          <div class="container d-flex justify-content-center align-items-center mt-0">
    <div class="card w-100 shadow-lg shadow-primary">
        <div class="card-body text-left">
        
        <a class="nav-link" id="#add" href="DeletBlog.php">
            <i class="bi  bi-file-earmark-x"></i>  
           Delete  Blog
            </a>
            </div>
    </div>
</div>
</li>

<hr>
 </ul>
      </div>

<style>
    .shadow-success {
        box-shadow: 0 0.5rem 2rem rgba(70, 55, 379, 0.5) !important;
    }
    .shadow-primary {
        box-shadow: 0 0.5rem 2rem rgba(570, 55, 279, 0.5) !important;
    }
</style>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5">

    
     
    </main  
    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>

      <script src="https://getbootstrap.com/docs/5.0/examples/dashboard/dashboard.js"></script>
  </body>
</html>
