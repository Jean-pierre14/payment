<?php session_start();?>
<?php include('./header.php');?>


<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#"><?= $_SESSION['username'];?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Dashbord</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Profil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About us</a>
      </li>    
    </ul>
  </div>  
</nav>
    
</body>
</html>