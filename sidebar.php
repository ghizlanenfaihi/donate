<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
<link href="https://fonts.googleapis.com/css?family=Crimson+Text&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'pfe1');
$query ="SELECT pic,NomA FROM admin";
$query_run = mysqli_query($connection, $query);
?>
<div class="sidebar">
      <center>
      <?php
      while ($row=mysqli_fetch_array($query_run)) {
          ?>
        <img src="<?php echo $row['pic']; ?>" class="profile_image" alt="">
        <h4><?php echo $row['NomA']; ?></h4>
        <?php
      }
   ?>
      </center>
      <a href="profile.php"><i class="far fa-user"></i><span>Profile</span></a>
      <a href="dashboard.php"><i class="fas fa-desktop"></i><span>Tableau de bord</span></a>
      <a href="#"><i class="far fa-envelope"></i><span>Messages</span></a>
      <a href="login.php"><i class="fas fa-sign-out-alt"></i><span>Se déconnecter</span></a>
    </div>

    <style>
     body{
       background-color: #D8D8D8;
     }
       
       .sidebar {
    background: #2f323a;
    padding-top: 30px;
    left: 0;
    width: 250px;
    height: 100%;
    position:fixed;
  }
  
  .sidebar .profile_image{
    width: 100px;
    height: 100px;
    border-radius: 100px;
    margin-bottom: 10px;
  }
  
  .sidebar h4{
    color: #ccc;
    margin-top: 0;
    margin-bottom: 20px;
  }
  
  .sidebar a{
    color: #fff;
    display: block;
    width: 100%;
    line-height: 60px;
    text-decoration: none;
    padding-left: 40px;
    box-sizing: border-box;
    transition: 0.5s;

  }
  
  .sidebar a:hover{
    background: #19B3D3;
  }
  
  .sidebar i{
    padding-right: 10px;
  } 
 
 
       </style>
