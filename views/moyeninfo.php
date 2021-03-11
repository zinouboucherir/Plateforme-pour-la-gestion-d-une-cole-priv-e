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
<?php include('header.html')?> 
<br/>
<?php include('menu.html')?>
<br>

<h1 id="schoolname" style="color:cadetblue" class="text-center">Informations Pratique</h1>
<section>
<div class="jumbotron page" id="page1">
    <div class="row">
        <?php 
        while ($data=$infos->fetch())
        {
        ?>
        <div class="col-sm-3 mb-2">
            <div class="card">
                 <div class="card-body">
                     <h5 class="card-title"><?php echo $data['titre']?></h5>
                     <p class="card-text"><?php echo  substr($data['descr'],0,150)?>...</p>
                     <center><a href="<?php echo "showarticle?id=".$data['id']?>" class="btn btn-info text-center">Afficher la suite</a></center>
                </div>
            </div>
        </div>
        <?php
        }
        $infos->closeCursor();
        ?>
    </div>
</div>   
</section>


<br/><br/>
<?php include('footer.html')?>
<script src="JS/jquery.js"></script>
 <script src="JS/bootstrap.js"></script>
  <script src="JS/accueiljs.js"></script>
</body>
</html>