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

<section><div class="jumbotron page" id="page1">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>La liste des enseignants du cycle<b> moyen</b></h2>
					</div>
				</div>
			</div>
<input type="text" id="myInput" onkeyup="myFunction3()" placeholder="rechercher..">
<table class="table table-hover table-bordered table-responsive bg-white" id="myTable" >
<thead>
					<tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Matiére</th>
                        <th>joure de réception</th>
                        <th>heure de réception</th>
                    
					</tr>
				</thead>
				<tbody>
                <?php
                    while ($data=$ens->fetch())
                      {
                        ?>
                    <tr>
                    <td style="width:25%;"><?php echo $data['nom']?></td>	
                        <td style="width:25%;"><?php echo $data['prenom']?></td>
                        <td style="width:25%;"><?php echo $data['matiere']?></td>
                        <td style="width:25%;"><?php echo $data['jourRec']?></td>	
                        <td style="width:25%;"><?php echo $data['heureRec']?></td>  
                    
					</tr>
        <?php
          }
        $ens->closeCursor();
        ?>
		</tbody>
		</table>
        </div>
</section>

  
        <br/><br/>
<?php include('footer.php')?>
<script src="JS/jquery.js"></script>
 <script src="JS/bootstrap.js"></script>
  <script src="JS/accueiljs.js"></script>
</body>
</html>