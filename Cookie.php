<?php
//session_start();

class Cookie
{
    private $ciasto, $polewa, $dodatek, $mleko;

    /**
     * cookie constructor.
     * @param $ciasto
     * @param $polewa
     * @param $dodatek
     * @param $mleko
     */
    public function __construct($ciasto = "", $polewa = "", $dodatek = "", $mleko = 0)
    {
        $this->ciasto = $ciasto;
        $this->polewa = $polewa;
        $this->dodatek = $dodatek;
        $this->mleko = $mleko;
    }

    public function getRandCookie()
    {
        //funkcja do losowania składnikow ciastka
        $this->ciasto = $_SESSION['ciasta'][rand(0, sizeof($_SESSION['ciasta']) - 1)];
        $this->polewa = $_SESSION['polewy'][rand(0, sizeof($_SESSION['polewy']) - 1)];
        $this->dodatek = $_SESSION['dodatki'][rand(0, sizeof($_SESSION['dodatki']) - 1)];
        $this->mleko = rand(0, 1);

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

    /**
     * @return mixed
     */
    public function getMleko()
    {
        return $this->mleko;
    }

    /**
     * @param mixed $mleko
     */
    public function setMleko($mleko)
    {
        $this->mleko = $mleko;
    }

    public function toString()
    {
        return "$this->ciasto;$this->polewa;$this->dodatek;$this->mleko";
    }


}