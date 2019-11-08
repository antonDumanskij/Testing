<?php


namespace Core\Base;



interface Decoy
{

    public static function getIdColor();
    public static function getColor();
    public static function updateColor(int $id, string $newColor);

}