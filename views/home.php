<?php
namespace app\views;
class home{
    public function afficher_home($articles,$adresse,$emails,$faxs,$telephones){
?>

<!DOCTYPE html>
<html lang="en">
<?php
$h=new home_view();
$h->head();
?>
<body >
<?php 
$header=new header();
$header->getheader();
$h->diaporame();
$menu=new menu();
$menu->getmenu();
$h->homebody($articles,$adresse,$emails,$faxs,$telephones);
$footer=new footer();
$footer->getfooter();

?>
</body>
</html>
<?php
    }
}
?>