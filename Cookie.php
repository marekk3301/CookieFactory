<?php
//session_start();

class Cookie
{
    private $ciasto, $polewa, $dodatek;

    /**
     * cookie constructor.
     * @param $ciasto
     * @param $polewa
     * @param $dodatek
     */
    public function __construct($ciasto = "", $polewa = "", $dodatek = "")
    {
        $this->ciasto = $ciasto;
        $this->polewa = $polewa;
        $this->dodatek = $dodatek;

    }

    public function getRandCookie()
    {
        //funkcja do losowania składnikow ciastka
        $this->ciasto = $_SESSION['ciasta'][rand(0, sizeof($_SESSION['ciasta']) - 1)];
        $this->polewa = $_SESSION['polewy'][rand(0, sizeof($_SESSION['polewy']) - 1)];
        $this->dodatek = $_SESSION['dodatki'][rand(0, sizeof($_SESSION['dodatki']) - 1)];

    }



    /**
     * @return mixed
     */
    public function getCiasto()
    {
        return $this->ciasto;
    }

    /**
     * @param mixed $ciasto
     */
    public function setCiasto($ciasto)
    {
        $this->ciasto = $ciasto;
    }

    /**
     * @return mixed
     */
    public function getPolewa()
    {
        return $this->polewa;
    }

    /**
     * @param mixed $polewa
     */
    public function setPolewa($polewa)
    {
        $this->polewa = $polewa;
    }

    /**
     * @return mixed
     */
    public function getDodatek()
    {
        return $this->dodatek;
    }

    /**
     * @param mixed $dodatek
     */
    public function setDodatek($dodatek)
    {
        $this->dodatek = $dodatek;
    }


    public function toString()
    {
        return "$this->ciasto;$this->polewa;$this->dodatek";
    }
}