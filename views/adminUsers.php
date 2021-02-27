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

<section>
<div class="jumbotron page" id="page1">
    <div class="row">
        <div class="col-sm-3 mb-2">
        <div class="card" style="background-image:url('https://images.unsplash.com/photo-1580582932707-520aed937b7b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1189&q=80');background-size: cover;">
                 <div class="card-body">
                 </br></br></br></br></br></br>
                     <center><a href="adminClasse" class="btn btn-info text-center">Gérer les classes</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-2">
        <div class="card" style="background-image:url('https://typeachecklist.files.wordpress.com/2015/08/high-school-students.jpg');background-size: cover;">
                 <div class="card-body">
                 </br></br></br></br></br></br>
                     <center><a href="adminEleve" class="btn btn-info text-center">Gérer les éléves</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-2">
        <div class="card" style="background-image:url('https://cdn.cdnparenting.com/articles/2018/05/578885038-H-1024x700.jpg');background-size: cover;">
                 <div class="card-body">
                 </br></br></br></br></br></br>
                     <center><a href="adminParent" class="btn btn-info text-center">Gérer les parents</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-2">
            <div class="card" style="background-image:url('https://www.sencampus.com/app/uploads/informatique.png');background-size: cover;">
                 <div class="card-body">
                 </br></br></br></br></br></br>
                     <center><a href="adminAdmin" class="btn btn-info text-center">Gérer les administrateurs</a></center>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

</body>
</html>
