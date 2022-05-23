<?php

class Livre 
{
    // public static $tabLivres = [];
    private static $comptId=1;
    private $id;
    private $image;
    private $titre;
    private $nbrePages;
    // private $actions;

    public function __construct($id, $image, $titre,$nbrePages){
        $this->id = self ::$comptId ++;    
        $this->image = $image;
        $this->titre = $titre;
        $this->nbrePages = $nbrePages;
        // self::$tabLivres[] = $this;
    }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }


                /**
         * Get the value of image
         */ 
        public function getImage()
        {
                return $this->image;
        }

        /**
         * Set the value of image
         *
         * @return  self
         */ 
        public function setImage($image)
        {
                $this->image = $image;

                return $this;
        }

        
    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of nbrePages
     */ 
    public function getNbrePages()
    {
        return $this->nbrePages;
    }

    /**
     * Set the value of nbrePages
     *
     * @return  self
     */ 
    public function setNbrePages($nbrePages)
    {
        $this->nbrePages = $nbrePages;

        return $this;
    }

    public static function tabLivres()
    {
        return self::$tabLivres;
    }


    /**
     * Set the value of tabLivre
     *
     * @return  self
     */ 
    public function setTabLivres($tabLivres)
    {
        $this->tabLivre = $tabLivre;

        return $this;
    }
}