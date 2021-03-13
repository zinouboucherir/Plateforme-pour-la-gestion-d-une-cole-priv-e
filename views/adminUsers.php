<?php
namespace app\views;
class adminUsers{
public function adminUsersbody(){
?>
<br/>
<br/>
<h1 id="schoolname" style="color:cadetblue" class="text-center">Gestions des utilisateurs</h1>
<br/>

<section>
<div class="jumbotron page" id="page1">
    <div class="row">
        <div class="col-sm-3 mb-2">
        <div class="card" style="background-image:url('https://images.unsplash.com/photo-1580582932707-520aed937b7b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1189&q=80');background-size: cover;">
                 <div class="card-body">
                 </br></br></br></br></br></br>
                     <center><a href="adminClasse" class="btn btn-info text-center">Gérer les classes</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-2">
        <div class="card" style="background-image:url('https://typeachecklist.files.wordpress.com/2015/08/high-school-students.jpg');background-size: cover;">
                 <div class="card-body">
                 </br></br></br></br></br></br>
                     <center><a href="adminEleve" class="btn btn-info text-center">Gérer les éléves</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-2">
        <div class="card" style="background-image:url('https://cdn.cdnparenting.com/articles/2018/05/578885038-H-1024x700.jpg');background-size: cover;">
                 <div class="card-body">
                 </br></br></br></br></br></br>
                     <center><a href="adminParent" class="btn btn-info text-center">Gérer les parents</a></center>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-2">
            <div class="card" style="background-image:url('https://www.sencampus.com/app/uploads/informatique.png');background-size: cover;">
                 <div class="card-body">
                 </br></br></br></br></br></br>
                     <center><a href="adminAdmin" class="btn btn-info text-center">Gérer les administrateurs</a></center>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<?php
}
public function afficher_adminUsers(){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <?php
    $h=new home_view();
    $h->head();
    ?>
    <body>
    <?php 
    $header=new header();
    $header->getheader();
    $menu=new adminMenu();
    $menu->getmenu();
    $this->adminUsersbody();
    $footer=new footer();
    $footer->getfooter();
    ?>
    </body>
    </html>
    <?php
        }
    }
    ?>
