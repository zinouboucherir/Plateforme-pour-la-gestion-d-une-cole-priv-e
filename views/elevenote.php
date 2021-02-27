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
<nav class="navbar navbar-expand-lg navbar-light ">
   
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarText">
     <ul class="navbar-nav mr-auto">
     <li class="nav-item">
     <a href="elevelogout"class="nav-link text-light"><i class="fa fa-sign-out"></i> déconnecter</a>
       </li>
       <li class="nav-item">
           <a href="eleve"class="nav-link text-light"><i class="fa fa-home"></i> Accueil</a>
       </li>
       <li class="nav-item">
         <a href="presentation"class="nav-link text-light"><i class="fa fa-calendar"></i> Emploi du temps</a>
       </li>
       <li class="nav-item " >
           <a href="elevelogin"class="nav-link text-light"><i class="fa fa-check-square-o"></i> Notes</a> 
       </li>
       <li class="nav-item ">
           <a href=""class="nav-link text-light"><i class="fa fa-futbol-o"></i> Activitées extrascolaires</a>
    </li>
     </ul>
     <form class="form-inline my-2 my-lg-0">
       <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
       <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
     </form>
   </div>
</nav>
<br>
<section>
  
</section>
<div class="jumbotron page" id="page1">

			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Vos Notes</b></h2>
					</div>
				</div>
			</div>
            <br>
            <table class="table table-hover table-bordered table-responsive bg-white" style="width:100%;">
              <thead>
                <tr>
                  <th scope="col">Matiére</th>
                  <th scope="col">Controle continu</th>
                  <th scope="col">Note de devoir</th>
                  <th scope="col">Note d'examen</th>
                </tr>
              </thead>
               <tbody>
              <?php
                    while ($data=$notes->fetch())
                      {
                        ?>
                    <tr> 
                        <td style="width:10%;"><?php echo $data['matiere']?></td>
                        <td style="width:10%;"><?php echo $data['cc']?></td>
                        <td style="width:10%;"><?php echo $data['devoir']?></td>
                        <td style="width:10%;"><?php echo $data['examen']?></td>
                    </tr> 

                    <?php
                     }
                   $notes->closeCursor();
                ?>
             </tbody>
          </table>

        </div>
                    </section>
<br>
<?php include('footer.html')?>
</body>
</html>
       