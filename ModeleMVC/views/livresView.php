<?php ob_start();
require_once "livreClass.php";
require_once "livreManager.php";

$livreManager = new LivreManager();
$livreManager->chargementLivres();


// $livre1 = new Livre(1,"1996361032.jpg","sorcier",260);
// $livre2 = new Livre(2,"9782352944324-475x500-1.jpeg", "Lalalala", 580);
// $livre3 = new Livre(3,"Harry-Potter-a-l-ecole-des-sorciers.jpg", "Harry Pêteur", 955);
// $livre4 = new Livre(4,"influence.jpg","l'infuence", 413);
// $livre5 = new Livre(5,"sagessePsy.jpg","La sagesse du psychopathe",180);   
// $livre6 = new Livre(6,"1996361032.jpg","La sagesse ",450);


// $livreManager->ajoutLivres($livre1);
// $livreManager->ajoutLivres($livre2);
// $livreManager->ajoutLivres($livre3);
// $livreManager->ajoutLivres($livre4);
// $livreManager->ajoutLivres($livre5);
// $livreManager->ajoutLivres($livre6);

// var_dump($livreManager->tabLivres());
?>


<br>

<table class="table text-center">
<tr class="table-dark">
<th>Id</th>    
<th>Image</th>
<th>Titre</th>
<th>Nombre de pages</th>
<th colspan="2">Actions</th>
</tr>

<?php
foreach($livreManager->tabLivres() as $value)
        {
    ?>
                <tr>
                <td class='align-middle'> <?= $value->getId()?></td>
                <td class="align-middle"><img src="assets/public/images/<?= $value->getImage()?>" alt=""
                width="60px;"></td>
                <td class='align-middle'> <?= $value->getTitre()?></td>
                <td class="align-middle"><?=$value->getNbrePages() ?></td>
                <td class="align-middle"><a href="" class="btn btn-warning">Modifier</a></td>
                <td class="align-middle"><a href="" class="btn btn-danger">Supprimer</a></td>
                </tr> 
                
                <?php } 
         ?>

</table>
<a href="" class="btn btn-success d-block">Ajouter</a>


<?php

?>

<?php
$titre = "Liste des livres";
$content = ob_get_clean();
require_once "templates.php";

?>