<?php


class Car
{
    /**
     * etat du frein a main
     * @var bool
     */
    private $_hasParkBrake;

    /**
     * @param bool $hasParkBrake
     */
    public function setHasParkBrake($hasParkBrake)
    {
        $this->_hasParkBrake = $hasParkBrake;
    }

    public function start()
    {
        if ($this->_hasParkBrake == true) {
            throw new Exception("Impossible de démarrer, le frein à main est toujours enclenché");
        } else {
            echo "Ma voiture roule comme un donut";
        }


    }


}