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
    <script src="JS/accueiljs.js"></script>
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
<br> <br>
<section>
<div class="jumbotron page" id="page1">
        <div class="table-title m-0" >
				<div class="row">
					<div class="col-sm-6">
						<h2>Les emplois du temps de vos enfants</b></h2>
					</div>
				</div>
			</div>
      <br>
      <input type="text" id="myInput" onkeyup="myFunction3()" placeholder="rechercher..">
    
<table class="table table-hover table-bordered bg-white table-responsive"  id="myTable">
				<thead>
					<tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Classe</th>
                    <th>Jour</th>
					<th>8-9</th>
					<th>9-10</th>
                    <th>10-11</th>
					<th>11-12</th>
                    <th>12-13</th>
                    <th>13-14</th>
					<th>14-15</th>
                    <th>15-16</th>
					<th>16-17</th>
					</tr>
				</thead>
				<tbody>
                <?php
                    while ($data=$emplois->fetch())
                      {
                        ?>
                    <tr>
                        <td><?php echo $data['prenom']?></td>
                        <td><?php echo $data['nom']?></td>
                        <td><?php echo $data['annee'].substr($data['cycle'],0,1).$data['numroClasse']?></td>
                        <td><?php echo $data['jour']?></td>	
                        <td><?php echo $data['t1']?></td>
                        <td><?php echo $data['t2']?></td>
                        <td><?php echo $data['t3']?></td>
                        <td><?php echo $data['t4']?></td>
                        <td><?php echo $data['t5']?></td>	
                        <td><?php echo $data['t6']?></td>
                        <td><?php echo $data['t7']?></td>
                        <td><?php echo $data['t8']?></td>
                        <td><?php echo $data['t9']?></td>
					</tr>
        <?php
          }
        $emplois->closeCursor();
        ?>
		</tbody>
		</table>
        </div>
  
</section>

<br>
<?php include('footer.html')?>
</body>
</html>