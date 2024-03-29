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
<?php include('menueleve.php')?>
<br/>

<br/> <?php 
        $data=$infos->fetch()
        ?>
<h1 id="schoolname" style="color:cadetblue" class="text-center">Binevenu <?php echo $data['prenom']; ?></h1>
<br/>
<section>
<div class="jumbotron page" id="page1" >
    <div class="row">
        <div class="col-sm-3 mb-2">
            <div class="card">
                <img src="https://image.freepik.com/free-photo/red-pin-event-calendar-background-close-up-time_37282-328.jpg" class="card-img-top" width="100" height="200px" alt="...">
                 <div class="card-body">
                     <h5 class="card-title">Emplois du temps</h5>
                     <p class="card-text">Consulter votre emploi du temps scolaire. </p>
                     <center><a href="emploiEleve"class="btn btn-info text-center">Consulter</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-2">
            <div class="card">
                <img src="https://www.fcpe95.com/wp-content/uploads/2017/02/enfants-ecole.jpg" class="card-img-top" width="100" height="200px" alt="...">
                 <div class="card-body">
                     <h5 class="card-title">Inforamtion personnelles</h5>
                     <p class="card-text">Consulter vos information personnelles. </p>
                     <center><a href="eleveinfos" class="btn btn-info text-center">Consulter</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-2">
            <div class="card">
                <img src="https://www.ucl.ac.uk/teaching-learning/sites/teaching-learning/files/migrated-images/feedback-grade_1.jpeg" class="card-img-top" width="100" height="200px" alt="...">
                 <div class="card-body">
                     <h5 class="card-title">Notes</h5>
                     <p class="card-text">Consulter vos notes dans les différentes matiéres  </p>
                     <center><a href="elevenote" class="btn btn-info text-center">Consulter</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-2">
            <div class="card">
                <img src="https://www.bemynounou.com/wp-content/uploads/2018/09/activite%CC%81-enfant-paris.png" class="card-img-top" width="100" height="200px" alt="...">
                 <div class="card-body">
                     <h5 class="card-title">Activitées Extrascolaires</h5>
                     <p class="card-text">Consulter vos activitées extrascolaires</p>
                     <center><a href="eleveactivite" class="btn btn-info text-center">Consulter</a></center>
                </div>
            </div>
        </div>
    </div>
</div>    
</section>

</body>
<BR></BR>
<?php include('footer.php')?>
<script src="JS/jquery.js"></script>
 <script src="JS/bootstrap.js"></script>
  <script src="JS/accueiljs.js"></script>
</html>