<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title> Houses Details </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="picture/fav/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="">Admin Panel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="insertform.php">Insert</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="showall.php">Retrive</a>
        </li>
        <li class="nav-item dropdown">
         
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
        </li>
      </ul>
      <form class="d-flex" role="search">
        <!-- <input class="form-control me-2" type="search" placeholder="Search" id="searchTxt" aria-label="Search"> -->
        <a href="index.php" class="btn btn-outline-success mx-2" type="submit">Site view</a>
        <a href="logout.php" class="btn btn-outline-success" type="submit">Logout</a>
      </form>
    </div>
  </div>
</nav>