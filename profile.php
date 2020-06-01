<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="https://use.fontawesome.com/d1341f9b7a.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
<link href="https://fonts.googleapis.com/css?family=Crimson+Text&display=swap" rel="stylesheet">
    <title>Profile</title>
  </head>
  <body>
  <?php require_once 'sidebar.php'; ?>

 
<div class="box">

<?php

$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'pfe1');
$query ="SELECT pic,NomA FROM admin";
$query_run = mysqli_query($connection, $query);
?>

<button type="button"  data-toggle="modal" data-target="#picture" style="margin-left:110px;margin-top:120px; width: 200px; height: 200px;  background:#D8D8D8 ;border:#D8D8D8;">
<?php
   while ($row=mysqli_fetch_array($query_run)) {
       ?>
    <img src="<?php echo $row['pic']; ?>" class="box-img">
    </button>


 <h1><?php echo $row['NomA']; ?>
</h1>
<?php
   }
            ?> 
                                
<!-- Modal of pic-->
<div class="modal fade" id="picture" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color:black">Changer votre profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="base.php"  method="POST">

      <input type="file" name="pic" class="form-control"  required="true"> 
   

      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-outline-info" name="update">Mettre à jour</button>
           </div>
</form>
      </div>
    </div>
  </div>
</div>

<button class="btn2" data-toggle="modal" data-target="#Nom">Nom</button>
<!-- Modal of name-->
<div class="modal fade" id="Nom" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color:black">Changer votre nom</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="base.php"  method="POST">
      <input  type="text" name="NomA" class="form-control" placeholder="Entrer le nom"  required="true">
   

      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-outline-info" name="modifier1">Mettre à jour</button>
           </div>
</form>
      </div>
    </div>
  </div>
</div>

<button class="btn1" data-toggle="modal" data-target="#passwd">Mot de passe</button>
<!-- Modal of password-->
<div class="modal fade" id="passwd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color:black">Changer votre mot de passe</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="base.php"  method="POST">
      <input  type="password" name="newpasswd" class="form-control" placeholder="Entrer un nouvau mot de passe"  required="true"></br>
      <input  type="password" name="cnfg" class="form-control" placeholder="configurer votre mot de passe"  required="true">


      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-outline-info" name="modifier2">Mettre à jour</button>
           </div>
</form>
      </div>
    </div>
  </div>
</div>
</div>
<style>
body{
  margin: 0;
  padding: 0;
  background-size: cover;

}
.box{
  text-align: center;
  margin: auto;
  font-family: 'Century Gothic',sans-serif;
}
.box-img{
  border-radius: 50%;
  width: 200px;
  height: 200px;
  cursor:pointer;
}
.box h1{
  margin-left:150px;
  font-size: 40px;
  letter-spacing: 4px;
  font-weight: 100px;
}

.box .btn1 {
  display: inline-block;
  padding:5px 20px;
  margin: 10px 60px;
  list-style: none;
  color:black;
  border-radius:10px;
  background-color:grey;
  transition: all ease-in-out 400ms;
}
.box .btn2 {
display: inline-block;
padding:5px 20px;
margin-left:220px;
list-style: none;
color:black;
border-radius:10px;
background-color:grey;
transition: all ease-in-out 400ms;
}
.box button:hover{
  color: #b9b9b9;
}



 
</style>


</body>
</html>

