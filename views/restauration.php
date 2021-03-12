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
<body style="background-image: url('https://previews.123rf.com/images/romastudio/romastudio1408/romastudio140800007/30548427-healthy-food-background-studio-photography-of-different-fruits-and-vegetables-on-wooden-table.jpg');
background-size: cover;" >
<?php include('header.php')?> 
<br/>
<?php include('menu.php')?>
<br/>

<?php 

        while ($data=$restaus->fetch())
        {
        ?>
        <center>
        <div class="col-sm-12 mb-2" style="width: 70%;">
                <div class="card">
                <div class="card-header">
  <h5 id="schoolname" style="color:#FF8C3E; font-size: 25px;" class="text-center"><?php  echo $data['jour']?></h5>
  </div>
                 <div class="card-body" style="background-image: url('https://i.pinimg.com/736x/85/5b/fc/855bfce7533a04bca7e0634cca73cb6a.jpg');
background-size: cover;">
               <center><h4 class="card-title">Entrée: <b><?php echo $data['entrée']?></b></h4></center>   
                <center> <h4 class="card-title">Plat principale:<b><?php echo $data['principale']?></b></h4></center> 
                 <center> <h4 class="card-title">Dessert: <b><?php  echo $data['dessert']?></b></h4></center>
                </div>
            </div>
                </div>
        </center>
    
<?php
        }
        $restaus->closeCursor();
        ?>
<br/>

<?php include('footer.php')?>
<script src="JS/jquery.js"></script>
 <script src="JS/bootstrap.js"></script>
  <script src="JS/accueiljs.js"></script>
</body>
</html>