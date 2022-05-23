
<?php
require_once "livreClass.php";
require_once "ModelClass.php";


class LivreManager extends Model
{
    private $tabLivres = [];

    public function tabLivres()
    {
        return $this->tabLivres;
    }

    public function ajoutLivres($NvoLiv)
    {
       $this->tabLivres[]=$NvoLiv;
    }

    public function chargementLivres()
    {
        $db = $this->getBdd();
        $sql = "SELECT * FROM livres";
        $req = $db->prepare($sql);
        $req->execute([]);
        $data = $req->fetchAll(PDO::FETCH_ASSOC);
    // return $data;
    foreach($data as $value){
        $instanceLivre= new Livre($value["id_livre"],$value["NomImg"],$value["titre"],$value["NbrePages"]
    );
        $this->ajoutLivres($instanceLivre);
    }
    }

}

?>