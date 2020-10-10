<?php
include_once 'Point2D.php';

include_once 'Point3D.php';

$point2d = new Point2D(0.22222,1.522);
var_dump ($point2d->toString());
var_dump($point2d->getXY());

$point3d = new Point3D(1.12,52.12,41);
var_dump ($point3d->toString());
var_dump ($point3d->getXYZ());