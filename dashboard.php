<!DOCTYPE html>
<html> 
<head>
<title>Tableau de bord</title>
</head>
<body>

<?php require_once 'sidebar.php'; ?>
   
<?php require_once 'process.php'; ?>

<?php
if (isset($_SESSION['message'])): ?>
<div class="alert alert-<?=$_SESSION['msg_type']?>">
<?php
echo $_SESSION['message'];
unset($_SESSION['message']);
?>
</div>
 <?php endif ?>
     
  
    
<?php

$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'pfe1');
$query ="SELECT * FROM annonce";
$query_run = mysqli_query($connection, $query);
?>

    <table class="table table-bordered">
    <thead class="thead-dark">
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Editer</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <?php
   while ($row=mysqli_fetch_array($query_run)) {
       ?>
  <tbody>
    <tr>
      <td><?php echo $row['NomC']; ?></td>
      <td><?php echo $row['description']; ?></td>

      <td><img src="<?php echo $row["image"]; ?>"  width="100px"; height="100px";> </td>

                           <td> 
                           <a href="dashboard.php?edit=<?php echo $row['idC']; ?>">
                                <button type="button" class="btn btn-outline-success "> EDITER </button>
                                </a>
                            </td> 
                            <td>
                            <a href="process.php?delete=<?php echo $row['idC']; ?>">
                                <button type="button" class=" btn btn-outline-danger"> SUPPRIMER </button>
                                </a>
                            </td>
    </tr>
  </tbody>
  <?php
   }
?>
</table>
    
  <style>
       .table {
       width:900px;
        margin-left:25%;
        background-color: white;

       }
       </style>
       

<div class="row justify-content-center">
<form action="process.php " method="POST">
<input  type="hidden" name="idC" value="<?php echo $idC; ?>">
    <div class="form-group">
    <label>Nom</label>
<input  type="text" name="NomC" class="form-control"  
value="<?php echo $NomC ; ?>" placeholder="Entrer le nom" required="true">
</div>
<div class="form-group">
<label>Description</label>
<textarea name="description" class="form-control" 
 placeholder="Entrer la description" required="true"><?php echo $description ; ?></textarea>
</div>
<div class="form-group">
<label>Image</label>
<input type="file" name="image" class="form-control" required="true">
</div>
<div class="form-group">
<?php
if ($update==true) :
?>
<button type="submit" class="btn btn-outline-info" name="update">Mettre à jour</button>
<?php else : ?>
<button type="submit" class="btn btn-outline-info" name="save">Enregistrer</button>
<?php endif ; ?>
</div>
</body>
</html>