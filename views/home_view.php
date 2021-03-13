<?php
namespace app\views;
class home_view{
    public function head(){
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/loginstyle.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/accueilStyle.css">

    <link rel="stylesheet" href="css/accueilStyle.css">
    <link rel="stylesheet" href="css/presentation.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="JS/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="JS/bootstrap.js"></script>
    <script src="JS/accueiljs.js"></script>
    
</head>
<?php
    }
  public function diaporame(){
    ?>  
<section>
    <div class="anim"></div>
</section>
<br/>
<?php  
}
public function homebody($articles,$adresse,$emails,$faxs,$telephones)
{
?>

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
<?php
} 
}
?>
