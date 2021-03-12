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
<?php include('header.php')?> 
<br/>
<?php include('menu.php')?>
<br/>
<section>
<div class="jumbotron page" id="page1">
    <div class="row">
        <div class="col-sm-3 mb-2">
            <div class="card">
                <img src="https://d3timt52sxdbq0.cloudfront.net/wp-content/uploads/2016/12/calendrierprojet.jpg" class="card-img-top" width="100" height="200px" alt="...">
                 <div class="card-body">
                     <h5 class="card-title">Emplois du temps</h5>
                     <p class="card-text">Consulter les emplois du temps globale du cycle secondaire. </p>
                     <center><a href="emploiSecondaire" class="btn btn-info text-center">Consulter</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-2">
            <div class="card">
                <img src="https://img.aws.la-croix.com/2019/11/13/1201060070/premier-degre-enseignant-debutant-gagne-9-moins-moyenne-lOCDE_0_1400_933.jpg" class="card-img-top" width="100" height="200px" alt="...">
                 <div class="card-body">
                     <h5 class="card-title">Enseignants </h5>
                     <p class="card-text">Consulter la liste des enseignant et leur heure de réception. </p>
                     <center><a href="ensSecondaire" class="btn btn-info text-center">Consulter</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-2">
            <div class="card">
                <img src="https://www.authentikusa.com/uploads/images/orig/bon-a-savoir/informations-pratiques.jpg" class="card-img-top" width="100" height="200px" alt="...">
                 <div class="card-body">
                     <h5 class="card-title">informations pratiques</h5>
                     <p class="card-text">Consulter toutes les informations pratiques qui vous interessent  </p>
                     <center><a href="secondaireInfo" class="btn btn-info text-center">Consulter</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-2">
            <div class="card">
                <img src="https://foodiesconsulting.com/wp-content/uploads/differentes-formes-de-restauration-1200x780.jpg" class="card-img-top" width="100" height="200px" alt="...">
                 <div class="card-body">
                     <h5 class="card-title">Restauration</h5>
                     <p class="card-text">vous pouvez consulter tout ce qui concerne la resaturation </p>
                     <center><a href="restauration" class="btn btn-info text-center">Consulter</a></center>
                </div>
            </div>
        </div>
    </div>
</div>   
</section>


<h1 id="schoolname" style="color:cadetblue" class="text-center">Articles</h1>
<section>
<div class="jumbotron page" id="page1">
    <div class="row">
        <?php 
        while ($data=$articles->fetch())
        {
        ?>
        <div class="col-sm-3 mb-2">
            <div class="card">
                <img src=<?php echo $data['lien'] ?> class="card-img-top" width="100" height="200px" alt="...">
                 <div class="card-body">
                     <h5 class="card-title"><?php echo $data['titre']?></h5>
                     <p class="card-text"><?php echo  substr($data['descr'],0,100)?>...</p>
                     <center><a href="<?php echo "showarticle?id=".$data['id']?>" class="btn btn-info text-center">Afficher la suite</a></center>
                </div>
            </div>
        </div>
        <?php
        }
        $articles->closeCursor();
        ?>
    </div>
</div>   
</section>

<br/><br/>


<?php include('footer.php')?>
<script src="JS/jquery.js"></script>
 <script src="JS/bootstrap.js"></script>
  <script src="JS/accueiljs.js"></script>
</body>
</html>