<?php
namespace app\views;
class presentation_view{
public function title(){
?>
<h1 id="schoolname" style="color:cadetblue" class="text-center">Présentation du l'école</h1>
<br/>
<?php
    }

  public function presentationbody($presentations){
    ?> 
<div class="how-section1">
        <?php 
        $i=0;
        while ($data=$presentations->fetch())
        {
        $i++;
        ?>
                <div class="row">
                    <?php if ($i&1) {?>
                        <div class="col-md-6">
                        <h4><?php  echo $data['titre']?></h4>
                        <p class="text-muted"><?php echo $data['texte'] ?></p>
                        </div>
                        <div class="col-md-6 ">
                            <img src=<?php echo $data['image'] ?> alt="" height="250px"/>
                        </div>
                    <?php } else {?>
                        <div class="col-md-6 ">
                            <img src=<?php echo $data['image'] ?> alt="" height="250px"/>
                        </div>
                        <div class="col-md-6">
                        <h4><?php  echo $data['titre']?></h4>
                        <p class="text-muted"><?php echo $data['texte'] ?></p>
                        </div>
                        <?php  }  ?>  
                    </div>
        <?php
        }
        $presentations->closeCursor();
        ?>
</div>    
<?php
} 
}
?>