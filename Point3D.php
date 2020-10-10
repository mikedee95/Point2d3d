<?php

include_once 'Point2D.php';


class Point3D extends Point2D
{
    protected $z;

    public function __construct($_x,$_y,$_z)
    {
        parent::__construct($_x,$_y);
        $this->z = (float) $_z;
    }

    public function getZ()
    {
        return $this->z;
    }

    public function setZ($_z)
    {
        $this->z = (float) $_z;
    }

    public function setXYZ($_x,$_y,$_z)
    {
        $this->x = (float) $_x;
        $this->y = (float) $_y;
        $this->z = (float) $_z;
    }

    public function getXYZ()
    {
        return [$this->x, $this->y, $this->z];
    }

    public function toString()
    {
        return "$this->x,$this->y,$this->z";
    }
}