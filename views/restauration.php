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
<br/>
<h1 id="schoolname" style="color:cadetblue" class="text-center">Restauration</h1>
<br/>
<?php 
        while ($data=$restaus->fetch())
        {
        ?>
<div class="card text-center">
  <div class="card-header">
  <h5 id="schoolname" style="color:cadetblue; font-size: 25px;" class="text-center"><?php  echo $data['jour']?></h5>
  </div>
  <div class="card-body">
    <h4 class="card-title">Entrée: <b><?php echo $data['entrée']?></b></h4>
    <h4 class="card-title">Plat principale:<b><?php echo $data['principale']?></b></h4>
    <h4 class="card-title">Dessert: <b><?php  echo $data['dessert']?></b></h4>
  </div>
</div>
<?php
        }
        $restaus->closeCursor();
        ?>
<br/>

<?php include('footer.html')?>
<script src="JS/jquery.js"></script>
 <script src="JS/bootstrap.js"></script>
  <script src="JS/accueiljs.js"></script>
</body>
</html>