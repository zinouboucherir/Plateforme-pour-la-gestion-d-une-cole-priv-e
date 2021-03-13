<?php
namespace app\views;
class footer{
    public function getfooter(){
?>
<footer>
    <div class="footer">
        <ul>
            <li class="footeritem"><a href="home" class="text-light">Accueil</a> </li>
            <li class="footeritem"><a href="presentation" class="text-light">Présentation</a></li>
            <li class="footeritem"><a href="primaire" class="text-light">Primaire</a></li>
            <li class="footeritem"><a href="moyen" class="text-light">Moyen</a></li>
            <li class="footeritem"><a href="secondaire" class="text-light">Secondaire</a></li>
            <li class="footeritem"><a href="elevelogin" class="text-light">Espace éléve</a> </li>
            <li class="footeritem"><a href="parentlogin" class="text-light">Espace Parent</a></li>
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
<?php
    }
}
?>