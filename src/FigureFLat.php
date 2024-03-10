<?php

declare(strict_types=1);

namespace App;

abstract class FigureFLat
{
    abstract public function getPerimeter(): float;

    abstract public function getSurface(): float;
}
