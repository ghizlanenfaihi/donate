<?php
if(isset($_POST['submit'])){


$firstName=$_POST['firstName'];
$LastName=$_POST['LastName'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$number=$_POST['number'];
$message=$_POST['message'];

//La connexion avec la base de donnée
$conn = new mysqli('localhost','root','','pfe1');
if($conn->connect_error){
    die('Connection failed :' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into utilisateur(firstName, LastName, gender, email, number,message) 
    values('$firstName','$LastName ','$gender' ,'$email' ,'$number' , '$message') ");
    $stmt->execute();
            echo "<script>alert('Votre messege est bien envoyé.');</script>";  
    //close the statement
    $stmt->close();
    //close the connection
    $conn->close();  

}}
?>
<!DOCTYPE html>
<html>
    <head>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <title>contactez-nous</title>

    </head>
    <header>
        <div class="mainheader">
            <div class="logo">
                <img src="logo.png">
            </div>

            <nav>
                <a href="home.html">accueil</a>
                <a href="case.php">cas</a>
                <a href="contacter nous.php">contact</a>
            </nav>

            <div class="menubtn">
                <a href="learn.html">
                    <button>PLUS</button>
                </a>
            </div>
        </div>
    </header>
    <body>
        <div class="container">
            <div class="row col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <h1>contactez-nous</h1>
                    </div>
                    
                <div class="panel-body">
                    <form action="contactez nous.php" method="POST">
                        <div class="form-group">
                            <label for="firstName">Votre nom</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="S'il vous-plaît entrer votre nom" required="required" data-error="Firstname is required." />
                        </div>
                        <div class="form-group">
                            <label for="LastName">Votre prénom</label>
                            <input type="text" class="form-control" id="LastName" name="LastName" placeholder="S'il vous-plaît entrer votre prénom" required="required" data-error="Lastname is required." />
                        </div>
                        <div class="form-group">
                            <label for="email">Le genre</label>
                            <div>
                                <label for="male" class="radio-inline"><input type="radio" name="gender" value="m" id="male" required="required">Mâle</label>
                                <label for="female" class="radio-inline"><input type="radio" name="gender"  value="f" id="female" required="required">Femelle</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="S'il vous-plaît entrer votre email" required="required" data-error="Valid email is required."/>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="number">Numéro de telephone</label>
                            <input type="number" class="form-control" id="number" name="number" placeholder="S'il vous-plaît entrer votre numéro de telephone" required="required"/>
                            <div class="help-block with-errors"></div>
                        </div>
                      <div class="form-group">
                                    <label for="message">Message </label>
                                    <textarea type="text" id="message" name="message" class="form-control" placeholder="Votre message" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            
                        <input type="submit" name ="submit" class="btn btn-primary" value="Envoyer">

                    </form>
                </div>
                <div class="panel-footer text-right">
                    <small>&copy; Donate money, Save life</small>
                </div>
                </div>
            </div>
        </div>
    </body>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Josefin Sans', sans-serif;
}

.mainheader {
    width: 100%;
    height: 100px;
    display: flex;
    justify-content: space-between;
    /*espace entre logo et menu*/
    align-items: center;
}

.mainheader .logo img {
    width: 250px;
    height: 200px;
    padding-left: 60px;
    /*espace left*/
}

.mainheader nav {
    width: 450px;
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.mainheader nav a {
    text-decoration: none;
    color: black;
    text-transform: uppercase;
}

.menubtn {
    margin-right: 60px;
}

.mainheader button {
    padding: 10px 45px;
    text-align: center;
    font-size: 14px;
    color: #fff;
    border: none;
    background-image: linear-gradient(to right, #649bff, #0070fa, #649bff);
    border-radius: 10px;
}
    </style>
</html>