<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/accueilStyle.css">
    <link rel="stylesheet" href="css/presentation.css">
    <script src="JS/jquery.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="JS/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
           <a href="#"class="nav-link text-light"><i class="fa fa-home"></i>Accueil</a>
       </li>
       <li class="nav-item">
         <a href=""class="nav-link text-light"><i class="fa fa-eye"></i> Présentation</a>
       </li>
       <li class="nav-item " >
           <a href="adminArticles"class="nav-link text-light"><i class="fa fa-calendar"></i> Articles</a> 
       </li>
       <li class="nav-item ">
           <a href=""class="nav-link text-light"><i class="fa fa-male"></i> Gestion Page Accueil</a>
       </li>
       <li class="nav-item ">
           <a href="#contact"class="nav-link text-light"><i class="fa fa-phone"></i> Contact</a> 
       </li>
       <li class="nav-item ">
           <a href="#contact"class="nav-link text-light"><i class="fa fa-phone"></i> Gestion utilisateurs</a> 
       </li>
     </ul>
     <form class="form-inline my-2 my-lg-0">
       <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
       <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
     </form>
   </div>
</nav>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Gestion <b>des articles</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter un nouvel article</span></a>	
					</div>
				</div>
			</div>
			<input type="text" id="myInput" onkeyup="myFunction3()" placeholder="rechercher..">
			<table class="table table-striped table-wrapper-scroll-y my-custom-" id="myTable" >
				<thead>
					<tr>
						<th>Titre</th>
						<th>Type</th>
						<th>Description</th>
						<th>Image</th>
					</tr>
				</thead>
				<tbody>
                <?php
                    while ($data=$articles->fetch())
                      {
                        ?>
                    <tr>
						<td style="width:15%;"><?php echo $data['titre']?></td>
                        <td style="width: 15%;"><?php echo $data['type']?></td>						
                        <td style=" word-break: break-all;width: 30%;"> <?php echo $data['descr']?></td>
                        <td><img src=<?php echo $data['lien']?> width="100%" height="200"></td>
                        <td style="width: 10%;" >
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
                    <?php
                    }
                    $articles->closeCursor();
                    ?>
				</tbody>
			</table>
		</div>
	</div>        
</div>
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form  method="POST" action="" enctype="multipart/form-data">
				<div class="modal-header">						
					<h4 class="modal-title">Ajouter Article</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>titre</label>
						<input type="text" class="form-control" name="titre" required>
					</div>
					<div class="form-group">
						<label>Description</label>
						<textarea class="form-control" name="descr" required></textarea>
					</div>
					<div class="form-group">
						<label>type</label>
						<input type="text" name="type" class="form-control" required>
					</div>		
                    <div class="form-group">
						<label>image</label>
						<input type="file" name="image" class="form-control" required>
					</div>							
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input  class="btn btn-success" type="submit" name="upload" value="upload article">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Edit Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" class="form-control" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Delete Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>

<footer>
    <div class="footer">
        <ul>
            <li class="footeritem"><a href="#" class="text-light">Accueil</a> </li>
            <li class="footeritem"><a href="#presentation" class="text-light">Présentation</a></li>
            <li class="footeritem"><a href="#" class="text-light">Primaire</a></li>
            <li class="footeritem"><a href="#" class="text-light">Moyen</a></li>
            <li class="footeritem"><a href="#" class="text-light">Secondaire</a></li>
            <li class="footeritem"><a href="#" class="text-light">Espace éléve</a> </li>
            <li class="footeritem"><a href="#" class="text-light">Espace Parent</a></li>
        </ul>
        <div>
            <a href="#" class="fa fa-facebook footeritem text-light"></a>
            <a href="#" class="fa fa-twitter footeritem text-light"></a>
            <a href="#" class="fa fa-instagram footeritem text-light"></a>
            <a href="#" class="fa fa-youtube footeritem text-light"></a>
        </div>
        <br/>
   </div>
</footer>
</body>
</html>