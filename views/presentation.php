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
<h1 id="schoolname" style="color:cadetblue" class="text-center">Présentation du l'école</h1>
<br/>
<div class="how-section1">
        <?php 
        $i=0;
        while ($data=$presentations->fetch())
        {
        $i++;
        ?>
                <div class="row">
                    <?php if ($i&1) {?>
                        <div class="col-md-6">
                        <h4><?php  echo $data['titre']?></h4>
                        <p class="text-muted"><?php echo $data['texte'] ?></p>
                        </div>
                        <div class="col-md-6 ">
                            <img src=<?php echo $data['image'] ?> alt="" height="250px"/>
                        </div>
                    <?php } else {?>
                        <div class="col-md-6 ">
                            <img src=<?php echo $data['image'] ?> alt="" height="250px"/>
                        </div>
                        <div class="col-md-6">
                        <h4><?php  echo $data['titre']?></h4>
                        <p class="text-muted"><?php echo $data['texte'] ?></p>
                        </div>
                        <?php  }  ?>  
                    </div>
        <?php
        }
        $presentations->closeCursor();
        ?>
</div>    
<?php include('footer.php')?>
<script src="JS/jquery.js"></script>
 <script src="JS/bootstrap.js"></script>
  <script src="JS/accueiljs.js"></script>
</body>
</html>