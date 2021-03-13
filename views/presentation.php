<?php
namespace app\views;
class presentation{
    public function afficher_presentation($presentations){
?>

<!DOCTYPE html>
<html lang="en">
<?php
$p=new presentation_view();
$h=new home_view();
$h->head();
?>
<body >
<?php 
$header=new header();
$header->getheader();
$menu=new menu();
$menu->getmenu();
$p->title();
$p->presentationbody($presentations);
$footer=new footer();
$footer->getfooter();
?>
</body>
</html>
<?php
    }
}
?>