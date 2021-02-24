<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/accueilStyle.css">
    <link rel="stylesheet" href="css/presentation.css">
    <script src="JS/jquery.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="JS/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
    <script src="JS/accueiljs.js"></script>
</head>
<body>
<?php include('adminMenu.php') ?>
<br/>
<br/>
<h1 id="schoolname" style="color:cadetblue" class="text-center">Gestions des utilisateurs</h1>
<br/>
<div class="container">
    <div class="row">
        <div class="col-3 mb-2">
        <div class="card" style="width:18rem; height:300px;background-image:url('https://markateur.com/wp-content/uploads/2017/04/articles.jpg');background-size: cover;">
                 <div class="card-body">
                 </br></br></br></br></br></br>
                     <center><a href="adminClasse" class="btn btn-info text-center">Gérer les classes</a></center>
                </div>
            </div>
        </div>
        <div class="col-3 mb-2">
        <div class="card" style="width:18rem; height:300px;background-image:url('https://www.liberte-scolaire.com/wp-content/uploads/2019/03/ecoleprimaire.jpg');background-size: cover;">
                 <div class="card-body">
                 </br></br></br></br></br></br>
                     <center><a href="adminEleve" class="btn btn-info text-center">Gérer les éléves</a></center>
                </div>
            </div>
        </div>
        <div class="col-3 mb-2">
        <div class="card" style="width:18rem; height:300px;background-image:url('https://www.ymag.fr/sites/default/files/styles/image_droite_biseau/public/clubs-utilisateurs.png?itok=av5n4Lna');background-size: cover;">
                 <div class="card-body">
                 </br></br></br></br></br></br>
                     <center><a href="adminParent" class="btn btn-info text-center">Gérer les parents</a></center>
                </div>
            </div>
        </div>
        <div class="col-3 mb-2">
            <div class="card" style="width:18rem; height:300px ;background-image:url('https://foodiesconsulting.com/wp-content/uploads/differentes-formes-de-restauration-1200x780.jpg');background-size: cover;">
                 <div class="card-body">
                 </br></br></br></br></br></br>
                     <center><a href="adminAdmin" class="btn btn-info text-center">Gérer les administrateurs</a></center>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
