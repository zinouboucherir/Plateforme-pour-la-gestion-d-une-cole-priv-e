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
<?php include('header.php')?> 
<br/>
<?php include('menueleve.php')?>
<br/>
<section>
<div class="jumbotron page" id="page1">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Les activitées extra-scolaire de vos enfants</b></h2>
					</div>
				</div>
			</div>
            <input type="text" id="myInput" onkeyup="myFunction3()" placeholder="rechercher..">
     <table class="table table-hover table-bordered table-responsive bg-white" id="myTable" style="width:100%;">
  <tbody>
  <thead>
    <tr>
     <th scope="col">Prénom</th>
     <th scope="col">Nom</th>
      <th scope="col">Type d'activité</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <?php
                    while ($data=$activites->fetch())
                      {
                        ?>
                    <tr> 
                        <td style="width:10%;"><?php echo $data['prenom']?></td>
                        <td style="width:10%;"><?php echo $data['nom']?></td>
                        <td style="width:10%;"><?php echo $data['type']?></td>
                        <td style="width:10%;"><?php echo $data['descr']?></td>
                    </tr> 

                    <?php
          }
        $activites->closeCursor();
        ?>
  </tbody>
</table>
</div>
</section>

<br>
<?php include('footer.php')?>
</body>
</html>