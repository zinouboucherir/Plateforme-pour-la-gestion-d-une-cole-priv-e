<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/accueilStyle.css">
    <link rel="stylesheet" href="css/presentation.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
  
</head>
<body >
<?php include('header.php')?>
<br/>
<?php include('menu.php')?>
<br/>
<?php 
        while ($data=$article->fetch())
        {
        ?>
       <div class="mb-2" style="margin-left:20%; margin-right: 20%;" >
            <div class="card" style="width:auto;">
                <img src=<?php echo $data['lien'] ?> class="card-img-top" width="100" height="350px" alt="...">
                 <div class="card-body">
                     <h5 class="card-title"><?php echo $data['titre']?></h5>
                     <p class="card-text"><?php echo $data['descr']?></p>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
<?php include('footer.php')?>
<script src="JS/jquery.js"></script>
 <script src="JS/bootstrap.js"></script>
  <script src="JS/accueiljs.js"></script>
</body>
</html>