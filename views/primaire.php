<?php
namespace app\views;
class primaire{
    public function afficher_primaire($articles){
?>

<!DOCTYPE html>
<html lang="en">
<?php
$p=new primaire_view();
$h=new home_view();
$h->head();
?>
<body >
<?php 
$header=new header();
$header->getheader();
$menu=new menu();
$menu->getmenu();
$p->primairebody($articles);
$footer=new footer();
$footer->getfooter();
?>
</body>
</html>
<?php
    }
}
?>