<?php
namespace app\views;
class menu{
    public function getmenu(){
?>
<nav class="navbar navbar-expand-lg navbar-light ">
   
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a href="home"class="nav-link text-light"><i class="fa fa-home"></i> Accueil</a>
        </li>
        <li class="nav-item">
          <a href="presentation"class="nav-link text-light"><i class="fa fa-eye"></i> Présentation</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-book"></i> Cycle
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a href="primaire"class="dropdown-item"><i class="fa fa-child"></i> Primaire</a> 
                <a href="moyen"class="dropdown-item" ><i class="fa fa-book"></i> Moyen</a> 
                <a href="secondaire"class="dropdown-item" ><i class="fa fa-graduation-cap"></i> Secondaire</a> 
            </div>
          </li>
        <li class="nav-item " >
            <a href="elevelogin"class="nav-link text-light"><i class="fa fa-calendar"></i> Espace éléve</a> 
        </li>
        <li class="nav-item ">
            <a href="parentlogin"class="nav-link text-light"><i class="fa fa-male"></i> Espace parent</a>
        </li>
        <li class="nav-item ">
            <a href="home#contact"class="nav-link text-light"><i class="fa fa-phone"></i> Contact</a> 
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
</nav>
<br>
<?php
    }
}
?>