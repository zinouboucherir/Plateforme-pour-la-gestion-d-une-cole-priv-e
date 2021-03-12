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
<section>
    <div class="anim"></div>
</section>
<br/>
<?php include('menu.php')?>
<br/>
<section style="background-color: #052A4E;">
    <br/>
    <center>
        <div>
            <img id="logo1" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/40/Round_Landmark_School_Icon_-_Transparent.svg/1024px-Round_Landmark_School_Icon_-_Transparent.svg.png" alt="">
             <h1 style=" font-size:40px;" class="text-light">Bienvenu sur le site de votre école</h1>
             <h5  class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex in vitae molestiae quaerat natus sint deserunt tenetur nulla sunt assumenda</h5>
        </div>
    </center>
    <br/>

</section>
<br>
    <section>
        <div class="jumbotron page" id="page1">
            <!-- first  the first row -->
            <div class="row">
            <?php 
            while ($data=$articles->fetch())
            {
            ?>
                <div class="col-sm-3 mb-2">
                <div class="card">
                <img src=<?php echo $data['lien'] ?> class="card-img-top" width="100px" height="200px" alt="...">
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
<br/>
<?php 
        $data=$adresse->fetch()
        
        ?>
    <center><h1 style="color:#052A4E;">Contact</h1></center>
    <br/>
    <div id="contact" class="card text-center">
        <div class="card-body" >
            <h5 class="text-light"><i class="fa fa-map-marker text-light"> <?php echo $data['adresse']?></i></h5>
            <br/>
            <div class="row">
            <?php 
            while ($data=$emails->fetch())
            {
           ?>
                <div class="col-3"><h6 class="text-light"><i class="fa fa-at text-light" ></i> <?php echo $data['email']?></h6></div>
            <?php
             }
            $emails->closeCursor();
            ?>
             <?php 
             $i=0;
            while ($data=$telephones->fetch())
            {
                $i++;
           ?>
             <div class="col-3"><h6 class="text-light"><i class="fa fa-phone text-light"></i> <?php echo $data['numero']?></h6></div>
            <?php
             }
            $telephones->closeCursor();
            ?>
             <?php 
            while ($data=$faxs->fetch())
            {
           ?>
                <div class="col-3"><h6 class="text-light"><i class="fa fa-fax text-light" ></i> <?php echo $data['fax']?></h6></div>
            <?php
             }
            $faxs->closeCursor();
            ?>
            </div>  
        </div>
    </div>
</section>
<br/>
<?php include('footer.php')?>
<script src="JS/jquery.js"></script>
 <script src="JS/bootstrap.js"></script>
  <script src="JS/accueiljs.js"></script>
</body>
</html>