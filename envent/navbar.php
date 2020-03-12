<?php 
  include('function.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Google Font Montserrat -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <!-- Google Font Montserrat -->
    <link rel="stylesheet" href="style.css">

    <title>Envent</title>
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/envent/index.php">Envent</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <form class="form-inline my-2 my-lg-0 ml-auto">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>

          <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
          <?php  if (isset($_SESSION['user'])) : ?>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo $_SESSION['user']['username']; ?>
        </a>
        
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Profile</a>
          <a class="dropdown-item" href="#">Write Blog</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Setting</a>
        </div>
      </li>
      <?php endif ?>

            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            
            <?php  if (isset($_SESSION['user'])) : ?>
            <li class="nav-item">
              <a class="nav-link" href="index.php?logout='1'">Logout</a>
            </li>
            <?php endif ?>

            <?php  if (!isset($_SESSION['user'])) : ?>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <?php endif ?>
            
          </ul>
          
        </div>
      </nav>