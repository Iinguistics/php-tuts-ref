<?php 

// refer to sandbox sessions
session_start();
$name = $_SESSION['name'];

//unset session, use unset method, then pass in your session
//unset($_SESSION['name']);

// Null Coalescing..if var already exists you can set name to new value using this
//$name = $_SESSION['name'] ?? 'Guest';


// get cookie  if gender not set fallback is unknown  ?? is basically or ||
$gender = $_COOKIE['gender'] ?? 'Unknown';


?>


<head>
<title>Pizza</title>
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="stylesheets/Footer.css"  />
<link rel="stylesheet" href="stylesheets/index.css"  />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="/tuts">Zah Pizza</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="/tuts/add.php">Order a pizza</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Pricing</a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-white" href="#"><?php echo htmlspecialchars($name); ?></a>  
        </li>
        <li class="nav-item">
        <a class="nav-link text-white" href="#"><?php echo htmlspecialchars($gender); ?></a>  
        </li>
      </ul>
    </div>
  </div>
</nav>