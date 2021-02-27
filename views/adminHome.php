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
<br/> <?php 
        $data=$infos->fetch()
        ?>
<h1 id="schoolname" style="color:cadetblue" class="text-center">Binevenu <?php echo $data['prenom']; ?></h1>
<br/>
<section>
</section>
<div class="jumbotron page" id="page1">
    <div class="row">
        <div class="col-sm-3 mb-2">
        <div class="card" style="background-image:url('https://markateur.com/wp-content/uploads/2017/04/articles.jpg');background-size: cover;">
                 <div class="card-body">
                 </br></br></br></br></br></br>
                     <center><a href="adminArticles" class="btn btn-info text-center">Gérer les articles</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-2">
        <div class="card" style="background-image:url('https://www.liberte-scolaire.com/wp-content/uploads/2019/03/ecoleprimaire.jpg');background-size: cover;">
                 <div class="card-body">
                 </br></br></br></br></br></br>
                     <center><a href="adminPresentation" class="btn btn-info text-center">Gérer les présentations</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-2">
        <div class="card" style="background-image:url('https://www.ymag.fr/sites/default/files/styles/image_droite_biseau/public/clubs-utilisateurs.png?itok=av5n4Lna');background-size: cover;">
                 <div class="card-body">
                 </br></br></br></br></br></br>
                     <center><a href="adminUsers" class="btn btn-info text-center">Gérer les utilisateurs</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-2">
            <div class="card" style="background-image:url('https://foodiesconsulting.com/wp-content/uploads/differentes-formes-de-restauration-1200x780.jpg');background-size: cover;">
                 <div class="card-body">
                 </br></br></br></br></br></br>
                     <center><a href="adminRestau" class="btn btn-info text-center">Gérer la restauration</a></center>
                </div>
            </div>
        </div>
    </div>
<section>
    <div class="row">
        <div class="col-sm-3 mb-2">
            <div class="card" style="background-image:url('https://d3timt52sxdbq0.cloudfront.net/wp-content/uploads/2016/12/calendrierprojet.jpg');background-size: cover;">
                 <div class="card-body">
                 </br></br></br></br></br></br>
                     <center><a href="adminEmploi" class="btn btn-info text-center">Gérer les emplois du temps</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-2">
            <div class="card" style="background-image:url('https://img.aws.la-croix.com/2019/11/13/1201060070/premier-degre-enseignant-debutant-gagne-9-moins-moyenne-lOCDE_0_1400_933.jpg');background-size: cover;">
            
                 <div class="card-body">
                 </br></br></br></br></br></br>
                     <center><a href="adminEns" class="btn btn-info text-center">Gérer les enseignants</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-2">
            <div class="card" style="background-image:url('https://img.freepik.com/photos-gratuite/contactez-nous_36325-2135.jpg?size=626&ext=jpg');background-size: cover;">
                 <div class="card-body">
                 </br></br></br></br></br></br>
                     <center><a href="adminContact" class="btn btn-info text-center">Gérer les contacts</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-2">
        <div class="card" style="background-image:url('https://www.votreassistante.net/wp-content/uploads/2013/02/creer-son-premier-diaporama-powerpoint.jpg');background-size: cover;">
                 <div class="card-body">
                 </br></br></br></br></br></br>
                     <center><a href="" class="btn btn-info text-center">Gérer le diaporama</a></center>
                </div>
            </div>
        </div>
    </div>

</section>

</body>
</html>
