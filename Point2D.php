<?php


class Point2D
{
    protected $x;
    protected $y;

    public function __construct($_x,$_y)
    {
        $this->x = (float) $_x;
        $this->y = (float) $_y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function setX($_x)
    {
        $this->x = (float)$_x;
    }

        public function getY()
    {
        return $this->y;
    }

    public function setY($_y)
    {
        $this->y = (float)$_y;
    }

    public function setXY($_x,$_y)
    {
        $this->x = (float)$_x;
        $this->y = (float)$_y;
    }

    public function toString()
    {
        return "$this->x,$this->y";
    }
    
    public function getXY()
    {
        return [$this->x,$this->y];
    }

}