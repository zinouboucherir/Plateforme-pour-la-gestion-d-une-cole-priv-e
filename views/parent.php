<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/accueilStyle.css">
    <link rel="stylesheet" href="css/presentation.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light ">
   
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarText">
     <ul class="navbar-nav mr-auto">
     <li class="nav-item">
     <a href="parentlogout"class="nav-link text-light"><i class="fa fa-sign-out"></i> déconnecter</a>
       </li>
       <li class="nav-item">
           <a href="eleve"class="nav-link text-light"><i class="fa fa-home"></i> Accueil</a>
       </li>
       <li class="nav-item">
         <a href="presentation"class="nav-link text-light"><i class="fa fa-calendar"></i> Emploi du temps</a>
       </li>
       <li class="nav-item " >
           <a href="elevelogin"class="nav-link text-light"><i class="fa fa-check-square-o"></i> Notes</a> 
       </li>
       <li class="nav-item ">
           <a href=""class="nav-link text-light"><i class="fa fa-futbol-o"></i> Activitées extrascolaires</a>
    </li>
     </ul>
     <form class="form-inline my-2 my-lg-0">
       <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
       <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
     </form>
   </div>
</nav>

<br/> <?php 
        $data=$infos->fetch()
        ?>
<h1 id="schoolname" style="color:cadetblue" class="text-center">Binevenu <?php echo $data['prenom']; ?></h1>
<br/>
<section>
<div class="jumbotron page" id="page1">
    <div class="row">
        <div class="col-sm-3 mb-2">
            <div class="card">
                <img src="https://d3timt52sxdbq0.cloudfront.net/wp-content/uploads/2016/12/calendrierprojet.jpg" class="card-img-top" width="100" height="200px" alt="...">
                 <div class="card-body">
                     <h5 class="card-title">Emplois du temps</h5>
                     <p class="card-text">Consulter les emplois du temps de vos enfants. </p>
                     <center><a href="emploiParent"class="btn btn-info text-center">Consulter</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-2">
            <div class="card">
                <img src="https://www.fcpe95.com/wp-content/uploads/2017/02/enfants-ecole.jpg" class="card-img-top" width="100" height="200px" alt="...">
                 <div class="card-body">
                     <h5 class="card-title">Inforamtion personnelles</h5>
                     <p class="card-text">Consulter vos information personnelles. </p>
                     <center><a href="parentinfos" class="btn btn-info text-center">Consulter</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-2">
            <div class="card">
                <img src="https://www.ucl.ac.uk/teaching-learning/sites/teaching-learning/files/migrated-images/feedback-grade_1.jpeg" class="card-img-top" width="100" height="200px" alt="...">
                 <div class="card-body">
                     <h5 class="card-title">Notes</h5>
                     <p class="card-text">Consulter les notes de vos enfants </p>
                     <center><a href="parentnote" class="btn btn-info text-center">Consulter</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-2">
            <div class="card">
                <img src="https://www.bemynounou.com/wp-content/uploads/2018/09/activite%CC%81-enfant-paris.png" class="card-img-top" width="100" height="200px" alt="...">
                 <div class="card-body">
                     <h5 class="card-title">Activitées Extrascolaires</h5>
                     <p class="card-text">Consulter les activitées extrascolaires de vos enfants</p>
                     <center><a href="parentactivite" class="btn btn-info text-center">Consulter</a></center>
                </div>
            </div>
        </div>
    </div>
</div>   
</section>

<br>
<?php include('footer.php')?>
</body>
</html>